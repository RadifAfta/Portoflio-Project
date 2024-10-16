'use strict';



/**
 * add event listener on multiple elements
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}



/**
 * NAVBAR TOGGLE FOR MOBILE
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNavbar);



/**
 * HEADER
 * active header when window scroll down to 100px
 */

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
});



/**
 * SCROLL REVEAL
 */

const revealElements = document.querySelectorAll("[data-reveal]");
const revealDelayElements = document.querySelectorAll("[data-reveal-delay]");

const reveal = function () {
  for (let i = 0, len = revealElements.length; i < len; i++) {
    if (revealElements[i].getBoundingClientRect().top < window.innerHeight / 1.2) {
      revealElements[i].classList.add("revealed");
    }
  }
}

for (let i = 0, len = revealDelayElements.length; i < len; i++) {
  revealDelayElements[i].style.transitionDelay = revealDelayElements[i].dataset.revealDelay;
}

window.addEventListener("scroll", reveal);
window.addEventListener("load", reveal);


/**
 * script Get the modal
 * pop up if click see project
 */
// Modal functionality for all projects
const projectModal = {
  init() {
      this.modal = document.getElementById("projectModal");
      this.modalImg = document.getElementById("modalImage");
      this.captionText = document.getElementById("caption");
      this.currentImageIndex = 0;
      this.currentImages = [];
      this.projectData = null;
      
      this.setupEventListeners();
      this.setupNavigationButtons();
  },

  setupEventListeners() {
      // Add click listeners to all project cards
      document.querySelectorAll('.project-card').forEach(card => {
          card.addEventListener('click', (e) => {
              // Only open modal if clicked element is not a link
              if (!e.target.closest('a')) {
                  e.preventDefault();
                  this.openModal(card);
              }
          });
      });

      document.querySelector('.modal-close').addEventListener('click', () => this.closeModal());

      window.addEventListener('click', (e) => {
          if (e.target === this.modal) this.closeModal();
      });

      document.addEventListener('keydown', (e) => {
          if (this.modal.style.display === "block") {
              if (e.key === "ArrowLeft") this.navigate(-1);
              if (e.key === "ArrowRight") this.navigate(1);
              if (e.key === "Escape") this.closeModal();
          }
      });
  },

  setupNavigationButtons() {
      const prevButton = document.createElement('button');
      prevButton.className = 'nav-button prev';
      prevButton.innerHTML = '←';
      prevButton.onclick = (e) => {
          e.stopPropagation();
          this.navigate(-1);
      };

      const nextButton = document.createElement('button');
      nextButton.className = 'nav-button next';
      nextButton.innerHTML = '→';
      nextButton.onclick = (e) => {
          e.stopPropagation();
          this.navigate(1);
      };

      this.modal.appendChild(prevButton);
      this.modal.appendChild(nextButton);
  },

  openModal(projectCard) {
      // Get the main image and data-images
      const mainImage = projectCard.querySelector('.card-banner img').src;
      const additionalImages = projectCard.dataset.images ? projectCard.dataset.images.split(',') : [];
      
      // Combine main image with additional images
      this.currentImages = [mainImage, ...additionalImages];
      this.currentImageIndex = 0;
      
      this.projectData = {
          title: projectCard.querySelector('.card-title').textContent,
          description: projectCard.querySelector('.card-text').textContent
      };
      
      this.modal.style.display = "block";
      document.body.style.overflow = "hidden";
      this.modal.setAttribute('aria-hidden', 'false');
      
      setTimeout(() => {
          this.modal.classList.add('active');
          this.updateModalContent();
          this.createThumbnails();
          this.updateNavigationVisibility();
      }, 50);
  },

  closeModal() {
      this.modal.classList.remove('active');
      document.body.style.overflow = "";
      setTimeout(() => {
          this.modal.style.display = "none";
          this.modal.setAttribute('aria-hidden', 'true');
          this.clearThumbnails();
      }, 300);
  },

  navigate(direction) {
      const newIndex = (this.currentImageIndex + direction + this.currentImages.length) % this.currentImages.length;
      
      this.modalImg.classList.add('transitioning');
      
      setTimeout(() => {
          this.currentImageIndex = newIndex;
          this.updateModalContent();
          this.modalImg.classList.remove('transitioning');
          this.updateNavigationVisibility();
      }, 200);
  },

  updateNavigationVisibility() {
      const prevButton = this.modal.querySelector('.nav-button.prev');
      const nextButton = this.modal.querySelector('.nav-button.next');
      
      // Only show navigation if there are multiple images
      if (this.currentImages.length <= 1) {
          prevButton.style.display = 'none';
          nextButton.style.display = 'none';
      } else {
          prevButton.style.display = 'flex';
          nextButton.style.display = 'flex';
      }
  },

  updateModalContent() {
      this.modalImg.src = this.currentImages[this.currentImageIndex];
      this.updateCaption();
      this.highlightCurrentThumbnail();
  },

  updateCaption() {
      if (this.projectData) {
          this.captionText.innerHTML = `
              <h3 class="modal-title">${this.projectData.title}</h3>
              <p class="modal-description">${this.projectData.description}</p>
          `;
      }
  },

  createThumbnails() {
      this.clearThumbnails();
      
      if (this.currentImages.length <= 1) return;
      
      const container = document.createElement('div');
      container.classList.add('thumbnail-container');
      
      this.currentImages.forEach((src, index) => {
          const thumbnail = document.createElement('div');
          thumbnail.classList.add('thumbnail');
          if (index === this.currentImageIndex) thumbnail.classList.add('active');
          
          thumbnail.addEventListener('click', (e) => {
              e.stopPropagation();
              this.currentImageIndex = index;
              this.updateModalContent();
          });
          
          container.appendChild(thumbnail);
      });

      this.modal.appendChild(container);
  },

  highlightCurrentThumbnail() {
      const thumbnails = this.modal.querySelectorAll('.thumbnail');
      thumbnails.forEach((thumb, index) => {
          thumb.classList.toggle('active', index === this.currentImageIndex);
      });
  },

  clearThumbnails() {
      const container = this.modal.querySelector('.thumbnail-container');
      if (container) container.remove();
  }
};

// Initialize modal functionality
document.addEventListener('DOMContentLoaded', () => projectModal.init());