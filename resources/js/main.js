const menu = document.getElementById('menu');
const navMenu = document.getElementById('nav-menu');
const CloseIcon = document.getElementById('nav-close');
const navLink = document.querySelectorAll(".nav__link");

navLink.forEach(link => 
    link.addEventListener("click", () => {
    navMenu.classList.add('hidden');
}));

menu.addEventListener("click", () => {
    navMenu.classList.remove('hidden');
});

CloseIcon.addEventListener("click", () => {
    navMenu.classList.add('hidden');
});

const tabs = document.querySelectorAll(".tabs_wrap ul li");
const all = document.querySelectorAll('.item_wrap');
const manha = document.querySelectorAll('.manha');
const tarde = document.querySelectorAll('.tarde');
const noite = document.querySelectorAll('.noite');

tabs.forEach(tab => {
    tab.addEventListener("click", () => {
        tabs.forEach(tab => {
            tab.classList.remove("active");
        });

        tab.classList.add('active');

        const tabval = tab.getAttribute('data-tabs');

        all.forEach(item => {
            item.style.display = 'none';
        });

        if(tabval == 'manha'){
            manha.forEach(item => {
                item.style.display = 'block';
            });
        }
        else if(tabval == 'tarde'){
            tarde.forEach(item => {
                item.style.display = 'block';
            });
        }
        else if(tabval == 'noite'){
                noite.forEach(item => {
                    item.style.display = 'block';
            });
        }
        else {
            all.forEach(item => {
                item.style.display = 'block';
        });
    }
    });
});


const html = document.querySelector("html");
const themebtn = document.getElementById("theme-toggle");

if(localStorage.getItem("mode") == "dark"){
    darkMode();
} else {
    lightMode();
}

themebtn.addEventListener('click', (e) => {
    if(localStorage.getItem("mode") == "light") {
        darkMode();
    } else {
        lightMode();
    }
    
})

function darkMode () {
    html.classList.add("dark");
    themebtn.classList.replace("fa-moon", "fa-sun");
    localStorage.setItem("mode", "dark");
}

function lightMode () {
    html.classList.remove("dark");
    themebtn.classList.replace("fa-sun", "fa-moon");
    localStorage.setItem("mode", "light");
}



