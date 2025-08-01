const BASE_PATH = document.head.querySelector("meta[name='base_path']").content;

// BACKGROUND THEME
var theme = "light";
if(theme == "black") {
    document.body.classList.add("bg-black");
}
function changeTheme(myTheme) {
    if(myTheme == "black") {
        theme = "black";
        document.body.classList.add("bg-black");
    }
    else {
        theme = "light";
        document.body.classList.remove("bg-black");
    }
}

function wpLink(text) {
    const wpNumber = "905301267153"; // WhatsApp Number Exp: 905301267153
    if(text != null && text != "") {
        window.open("https://api.whatsapp.com/send?phone=" + wpNumber + "&text=" + text, "_blank");
    }
    else {
        window.open("https://api.whatsapp.com/send?phone=" + wpNumber, "_blank");
    }
}

function callLink(number) {
    if(number != null && number != "") {
        window.open("tel:" + number, "_blank");
    }
}

/*document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'F12') {
      e.preventDefault()
    }
  });
  setInterval(function() {
    debugger;
  }, 1000);*/


  // LINK BUTTONS

  const linkButtons = document.querySelectorAll("button.link-btn");
  linkButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const link = button.getAttribute("href");
        if(link && button.getAttribute("target") != "_self") {
            window.open(link, "_blank");
        }
        else {
            window.open(link, "_self");
        }
    });
  });


  // SMOOTH SCROLL

  /* let lastPosition = window.scrollY;
  let targetPosition = window.scrollY;
  let isScrolling = false;
      
  
  function smoothScroll() {
      if (isScrolling) {
          const newPosition = lastPosition + (targetPosition - lastPosition) * 0.1; // Animasyon hızını ayarla
          
          // Sayfa sınırlarını kontrol et
          if (newPosition <= 0 || newPosition + window.innerHeight >= document.body.offsetHeight) {
              // Sayfanın en üstüne veya en altına ulaşıldıysa, animasyonu durdur ve hedefe zıpla
              isScrolling = false;
              window.scrollTo(0, targetPosition);
              return;
          }
  
          if (Math.abs(targetPosition - lastPosition) < 1) {
              lastPosition = targetPosition; // Hedefe çok yakınsak, tam konuma git
              isScrolling = false; // Animasyonu durdur
          } else {
              lastPosition = newPosition;
              window.scrollTo(0, newPosition);
              requestAnimationFrame(smoothScroll); // Sonraki animasyon adımını planla
          }
      }
  }
  
  window.addEventListener('wheel', function(event) {
      event.preventDefault();
  
      const delta = event.deltaY;
      const multiplier = 1.4; // Kaydırma miktarı
      // Hedef pozisyonu güncelle, ancak sayfa sınırlarını aşmamak için kontrol et
      const potentialTargetPosition = targetPosition + delta * multiplier;
      if (!(potentialTargetPosition <= -500 || potentialTargetPosition + window.innerHeight >= document.body.offsetHeight + 500)) {
          targetPosition = potentialTargetPosition;
      }
  
      if (!isScrolling) {
          isScrolling = true;
          smoothScroll(); // Animasyonu başlat veya devam ettir
      }
  }, { passive: false }); */
  
  
  const body = document.querySelector("body");
  
  const menuBtn = document.querySelectorAll(".main-menu-btn");
  const subMenuBtn = document.querySelectorAll(".menu-box");
  
    menuBtn.forEach(function(menu) {
        menu.addEventListener("click", function() {
            const isActive = menu.classList.contains("active");
            menuBtn.forEach(function(otherMenuBtn) {
                otherMenuBtn.classList.remove("active");
            });
            if (!isActive) {
                menu.classList.add("active");
            }
        });
    });

    document.addEventListener('click', function(e) {
        const isMenuBtnClicked = e.target.closest('.main-menu-btn');
        const isSubMenuBtnClicked = e.target.closest('.menu-box');

        if (!isMenuBtnClicked && !isSubMenuBtnClicked) {
            menuBtn.forEach(function(menu) {
                menu.classList.remove('active');
            });
        }
        responsiveMenu();
    });

    function responsiveMenu() {
        menuBtn.forEach(function(menu) {
            menu.style.marginTop = "0px";
        });

        const activeMenuBtn = document.querySelector(".main-menu-btn.active");
        if (activeMenuBtn) {
            const activeSubMenu = activeMenuBtn.querySelector(".menu-box");
            const nextMenuBtn = activeMenuBtn.nextElementSibling;
            if (window.innerWidth <= 1335) {
                if (nextMenuBtn && nextMenuBtn.classList.contains("main-menu-btn")) {
                    if (activeSubMenu) {
                        nextMenuBtn.style.marginTop = activeSubMenu.scrollHeight + "px";
                    }
                } else {
                    if (nextMenuBtn) {
                        nextMenuBtn.style.marginTop = "0px";
                    }
                    console.log("margin: false");
                }
            } else {
                if (nextMenuBtn) {
                    nextMenuBtn.style.marginTop = "0px";
                }
            }
        }
    }
    window.addEventListener("resize", responsiveMenu);
  
    const nav = document.querySelector("nav");
    const footer = document.querySelector("footer");
    
    window.addEventListener("scroll", function() {
    var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
    menuBtn.forEach(function(menu) {
        menu.classList.remove("active");
    });
    if(scrollPosition > 800) {
        nav.classList.add("active");
    }
    else {
        nav.classList.remove("active");
    }

    if(innerWidth <= 500) {
        if (footer.getBoundingClientRect().top <= 20) {
            nav.classList.add("close-fade");
        } else {
            nav.classList.remove("close-fade");
        }
    }
});
  

  const blurDivs = document.querySelectorAll(".blur-load");

function loaded(event) {
    const img = event.target;
    const parentDiv = img.parentElement;
    parentDiv.classList.add("loaded");
}

blurDivs.forEach(div => {
    const img = div.querySelector("img");
    if (img.complete && img.naturalHeight !== 0) {
        div.classList.add("loaded");
    } else {
        img.addEventListener("load", loaded);
    }
});

// Fixed Buttons

const fixedBtn = document.querySelectorAll(".fixed-contactBtn");
fixedBtn.forEach((btn) => {
    const btnDetails = btn.querySelector(".fixed-contactDetails");
    btn.addEventListener("mouseenter", () => {
        btn.classList.add("hover");
        btnDetails.style.width = btnDetails.scrollWidth + "px";
    });
    btn.addEventListener("mouseleave", () => {
        btn.classList.remove("hover");
        btnDetails.style.width = "0";
    });
});

// Navbar Scroll

window.addEventListener("DOMContentLoaded", navbarBg);
window.addEventListener("scroll", navbarBg);

function navbarBg() {
    let navbar = document.querySelector(".navbar");

    if(!document.querySelector(".relative .navbar")) {  
        if (window.scrollY > 100) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    }
    else {
        navbar.classList.add("scrolled");
    }
}

// NOTIFICATION

//NOTIFICATION TEXT

const try_nuru = "Nuru HealthCare Demo version is in the updating phase, thank you for your patience.";
const terms = "This section isn't work right now.";
const archive = "SpayAI security policies are archived, private and encrypted, your data is not recorded in any database or your instincts are not stolen.";
const devport = "It looks like the developer portal is giving an error, please contact the authorities";
const view = "These areas are still in the updating phase and the site is under construction.";
const team = "These areas are still in the updating phase and the site is under construction.";

//NOTIFICATION TEXT


const closeNotification = document.getElementById("closeNotification");
  const notification = document.getElementById("notification");
  
  closeNotification.addEventListener("click", function() {
      clearTimeout(notificationTimeout);
      clearTimeout(notificationTimeoutR);
      notification.classList.remove("active");
  });
  const notificationText = document.getElementById("notificationText");
  function openNotification(text) {
    if(text != "") {
        switch(text) {
            case 'terms' : notificationText.innerText = terms; break;
            case 'try_nuru' : notificationText.innerText = try_nuru; break;
            case 'archive' : notificationText.innerText = archive; break;
            case 'devport' : notificationText.innerText = devport; break;
            case 'view' : notificationText.innerText = view; break;
            case 'team' : notificationText.innerText = team; break;
            default : notificationText.innerText = ""; break;
        }
    }
      notification.classList.add("active");
      notificationTimeout = setTimeout(() => {
          notification.classList.remove("active");
      }, 5000);
  }

// NOTIFICATION

// Contact Focus Image

contactFocus();

window.addEventListener("resize", contactFocus);

function contactFocus() {
    const contactFocus = document.querySelectorAll(".focus.contact");

    contactFocus.forEach((contact) => {
        const contactIframe = contact.querySelector(".focus-img iframe");
        contactIframe.style.height = contact.querySelector(".focus-detail").scrollHeight + "px";
    });
}


// EMAIL Post

$(document).ready(function () {
    $("#emailForm").submit(function (event) {
        event.preventDefault(); // Sayfanın yenilenmesini engelle
        
        // <meta name="base_path"> içeriğini al
        var basePath = $("meta[name='base_path']").attr("content") || "";

        // Form verilerini al ve base_path'i ekle
        var formData = $(this).serialize() + "&base_path=" + encodeURIComponent(basePath);

        $.ajax({
            type: "POST",
            url: "assets/php/email_post.php",
            data: formData,
            success: function (response) {
                $("#result").html(response); // Yanıtı ekrana yazdır
                $("#emailForm")[0].reset(); // Formu sıfırla
            },
            error: function () {
                $("#result").html("<p style='color:red;'>Form gönderilirken hata oluştu.</p>");
            }
        });

        contactFocus();
    });
});

// MENUBAR

function menuBars(status) {
    const menus = document.querySelectorAll(".nav-container .menu-side");
    if(status == "open") {
        menus.forEach((navMenu) => {
            navMenu.classList.add("active");
        });
    }
    else if(status == "close") {
        menus.forEach((navMenu) => {
            navMenu.classList.remove("active");
        });
    }
}