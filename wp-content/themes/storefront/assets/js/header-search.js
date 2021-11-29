const toggle = document.querySelector('.col-md-5 .icon-search-toggle');
const fromWrapper = document.querySelector('.form-search-product-header');

toggle.addEventListener('click', function() {
  const icon = this.querySelector('.fas');
  this.classList.toggle('active');
  fromWrapper.classList.toggle('active');

  if(this.classList.contains('active')) {
    icon.classList.replace('fa-search', 'fa-times');
  } else {
    icon.classList.replace('fa-times', 'fa-search');
  }
});