//toggle icon navbar
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () =>{
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

//linking home buttons to
function scrollToContact(){
    let contact = document.getElementById('contact');
    contact.scrollIntoView({ behavior: "smooth" });
}


// scroll section
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () =>{
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 100;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            // active navbar link
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id +']').classList.add('active');
            });
            // active sections for animation on scroll
            sec.classList.add('show-animate');
        }
        // if want to use animation that repeats on scroll use this
        else{
            sec.classList.remove('show-animate'); 
        }
    });

    //sticky header
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    // remove toggle icon and navbar when click navbar links (scroll)
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');

    // animation footer on scroll
    let footer = document.querySelector('footer');
    footer.classList.toggle('show-animate', this.innerHeight + this.scrollY >= document.scrollingElement.scrollHeight);
}

//sending email
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission to avoid page refresh

        let tempVars = {
            from_name: document.getElementById('fullName').value,
            from_email: document.getElementById('email').value,
            from_number: document.getElementById('mobile').value,
            subject: document.getElementById('subject').value,
            message: document.getElementById('message').value,
        };

        emailjs.send('service_ux9fd9q', 'template_1kbro0m', tempVars)
            .then(function (res) {
                window.alert('E-mail successfully sent');
            });
    });
});
