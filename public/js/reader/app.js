var mockDataFeatures = [
    {
        id: "ZTHITMAL",
        link: "/html/comic1_1.html",
        name: "Zero To Hero In The Martial Arts Library",
        picture: "/Images/weekly-featured-right-1.jpg",
        text: "Eastern Fantasy",
        star: "5.0",
        time: "21/05/2022",
        link_chap_1: "/html/read_comic_1_1.html",
        chap_1: "001",
        link_chap_2: "/html/read_comic_1_1.html",
        chap_2: "002",
    },
    {
        id: "BAAIAWFTDO",
        link: "/html/comic1_2.html",
        name: "Becoming An Ancestor In Another World From This Day On",
        picture: "/Images/weekly-featured-right-2.jpg",
        text: "Fantasy",
        star: "4.5",
        time: "28/05/2022",
        chap_1: "001",
        chap_2: "002",
    },
    {
        id: "MVS",
        link: "/html/comic1_3.html",
        name: "My Vampire System",
        picture: "/Images/weekly-featured-right-11.jpg",
        text: "Fantasy",
        star: "4.5",
        time: "10/06/2022",
        chap_1: "001",
        chap_2: "002",
    },
    {
        id: "AIMAMWP",
        link: "/html/comic1_4.html",
        name: "After I Maxed All My Weapon Proficiencies",
        picture: "/Images/weekly-featured-right-4.jpg",
        text: "Eastern Fantasy",
        star: "3.8",
        time: "30/04/2022",
        chap_1: "001",
        chap_2: "002",
    },
    {
        id: "RWASS",
        link: "/html/comic1_5.html",
        name: "Reincarnated With A Summoning System",
        picture: "/Images/weekly-featured-right-5.jpg",
        text: "Action",
        star: "4.7",
        time: "01/05/2022",
        chap_1: "001",
        chap_2: "002",
    },
    {
        id: "SNS",
        link: "/html/comic1_6.html",
        name: "Super Necromancer System",
        picture: "/Images/weekly-featured-right-6.jpg",
        text: "Urban",
        star: "4.9",
        time: "01/02/2022",
        chap_1: "001",
        chap_2: "002",
    },
    {
        id: "FEM",
        link: "/html/comic1_7.html",
        name: "Fey Evolution Merchant",
        picture: "/Images/weekly-featured-right-7.jpg",
        text: "Eastern Fantasy",
        star: "4.0",
        time: "01/01/2022",
        chap_1: "001",
        chap_2: "002",
    },
    {
        id: "MROTPP",
        link: "/html/comic1_8.html",
        name: "MMORPG: Rise of the Peerless Pumpkinmancer",
        picture: "/Images/weekly-featured-right-8.jpg",
        text: "Video Games",
        star: "4.9",
        time: "02/02/2022",
        chap_1: "001",
        chap_2: "002",
    },
    {
        id: "ols",
        link: "/html/comic1_9.html",
        name: "One Last System",
        picture: "/Images/weekly-featured-right-9.jpg",
        text: "Fantasy",
        star: "3.7",
        time: "15/05/2022",
        chap_1: "001",
        chap_2: "002",
    },
    {
        id: "icp",
        link: "/html/comic1_10.html",
        name: "I Cultivate Passively",
        picture: "/Images/weekly-featured-right-10.jpg",
        text: "Eastern Fantasy",
        star: "4.2",
        time: "12/02/2022",
        chap_1: "001",
        chap_2: "002",
    },
];

var mockDataTags = [
    {
        tag: "romance",
    },
    {
        tag: "action",
    },
    {
        tag: "adventure",
    },
    {
        tag: "reincarnation",
    },
    {
        tag: "comedy",
    },
    {
        tag: "R18",
    },
    {
        tag: "System",
    },
    {
        tag: "Harem",
    },
    {
        tag: "cultivation",
    },
    {
        tag: "magic",
    },
];

var products = document.querySelector(".products");

mockDataFeatures.forEach((item) => {
    var newProduct = document.createElement("div");

    newProduct.classList.add("product");
    newProduct.innerHTML = `
          <a id="pro_img" href="${item.link}"><img src="${item.picture}" alt=""></a>
                  <div class="info">
                      <div class="title"><a href="${item.link}">${item.name}</a></div> 
                          <div class="chapter">
                              <p>Chương</p>
                              <a href="${item.link_chap_1}">${item.chap_1}</a>
                              <a href="${item.link_chap_2}">${item.chap_2}</a>
                          </div>
                  </div>`;
    products.appendChild(newProduct);
});

////////////////////Hiển thị các tìm kiếm
var searchInput = document.querySelector(".search input");
searchInput.addEventListener("input", function (e) {
    let textSearch = e.target.value.trim().toLowerCase();
    let listProduct = document.querySelectorAll(".product");
    let i = 0;

    listProduct.forEach((item) => {
        if (item.innerText.toLowerCase().includes(textSearch)) {
            item.classList.remove("hide");
            i++;
        } else {
            item.classList.add("hide");
        }
    });

    if (textSearch != "") products.style.display = "block";
    else products.style.display = "none";
    if (i == 0) products.style.display = "none";
});

/////////////////Trả ra các thể loại của truyện khi hover vào Browse...
var list_hover_1 = document.querySelectorAll(".list-hover-1 .left a");
var list_items = document.querySelectorAll(".list-hover-1 .right .list li");
var list_hover_2 = document.querySelectorAll(".list-hover-2 a");

function mouseOver1() {
    list_hover_1.forEach((list, n) => {
        list.addEventListener("mouseover", function () {
            list.classList.add("hover");
            list_items[n].classList.add("block");
            for (let index = 0; index < list_hover_1.length; index++) {
                if (index != n) {
                    list_hover_1[index].classList.remove("hover");
                    list_items[index].classList.remove("block");
                }
            }
        });
    });
}
window.addEventListener("mouseover", mouseOver1);

function mouseOver2() {
    list_hover_2.forEach((list) => {
        list.addEventListener("mouseover", function () {
            list.style.backgroundColor = "#3b66f5";
        });
    });
}

function mouseOut2() {
    list_hover_2.forEach((list) => {
        list.addEventListener("mouseout", function () {
            list.style.backgroundColor = "#25262f";
        });
    });
}
window.addEventListener("mouseover", mouseOver2);
window.addEventListener("mouseout", mouseOut2);

// -------------------------Weekly Book Slider------------------------
var input_slider = document.querySelectorAll(".slider input");
var slides = document.querySelectorAll(".slider .slides .slide");

input_slider.forEach((item, n) => {
    item.addEventListener("click", function () {
        a(n);
    });
});

function a(n) {
    slides[n].classList.add("first");
    nCount = n + 1;
    for (let index = 0; index < slides.length; index++) {
        if (index != n) {
            slides[index].classList.remove("first");
        }
    }
}

// SLIDER _ RADIO
var listBtn = document.querySelectorAll(".manual-btn");
let nCount = 1;
document.getElementById("radio" + nCount).checked = true;
setInterval(function () {
    nCount++;
    document.getElementById("radio" + nCount).checked = true;
    a(nCount - 1);
    if (nCount > listBtn.length - 1) nCount = 0;
}, 5000);

// --------------------Weekly Featured Slider-------------------
var change_imgs = document.querySelectorAll(".change_img p");
var change_reviews = document.querySelectorAll(".review_img .review");

let d = 3;
change_imgs.forEach((item, n) => {
    item.addEventListener("click", function () {
        if (item.dataset.index != 0) {
            change_slide(item, n);
        }
    });
});

setInterval(function () {
    change_slide(change_imgs[d - 1], d - 1);
}, 4000);

function change_slide(item, n) {
    for (let ing = 0; ing < change_imgs.length; ing++) {
        if (ing != n) {
            if (change_imgs[n].dataset.index == 1) {
                if (change_imgs[ing].dataset.index == 0)
                    change_imgs[ing].dataset.index = 2;
                else if (change_imgs[ing].dataset.index == 2)
                    change_imgs[ing].dataset.index = 1;
            } else {
                if (change_imgs[ing].dataset.index == 0)
                    change_imgs[ing].dataset.index = 1;
                else if (change_imgs[ing].dataset.index == 1)
                    change_imgs[ing].dataset.index = 2;
            }
            change_reviews[ing].classList.remove("_on");
        }
    }
    change_reviews[n].classList.add("_on");
    item.dataset.index = 0;
    if (n == 0) d = 3;
    else d = n;
}

// --------------------Add DIV Weekly Features-------------------

var list_features = document.querySelector(".list_featured");

mockDataFeatures.forEach((item) => {
    var newProduct = document.createElement("div");

    newProduct.classList.add("item");
    newProduct.innerHTML = `
    <a href="${item.link}" class = "picture"><img src="${item.picture}" alt=""></a>
    <h4 class="fs14"><a href="###" title="${item.name}"> ${item.name} </a></h4>
    <p class="fs14"><a href="###" title="${item.text}"> ${item.text} </a></p>
    `;
    list_features.appendChild(newProduct);
});

//--------------------SORT RANKING DESC------------------------
var mockDataRanking = mockDataFeatures;

// sortDESC()
function dynamicSort(property) {
    var sortOrder = 1;
    if (property[0] === "-") {
        sortOrder = -1;
        property = property.substr(1);
    }
    return function (a, b) {
        /* next line works with strings and numbers,
         * and you may want to customize it to your needs
         */
        var result =
            a[property] < b[property] ? -1 : a[property] > b[property] ? 1 : 0;
        return result * sortOrder;
    };
}

// --------------------Add DIV Weekly Ranking-------------------
var list_ranking1 = document.querySelector(".list_ranking._1");
var list_ranking2 = document.querySelector(".list_ranking._2");
var list_ranking3 = document.querySelector(".list_ranking._3");

//NEW SORT AND SHOW
var mockDataNew = mockDataRanking;

mockDataNew.sort((date1, date2) => {
    date1 = date1.time.split("/").reverse().join("/");
    date2 = date2.time.split("/").reverse().join("/");
    if (date1 < date2) {
        return -1;
    } else if (date1 > date2) {
        return 1;
    } else {
        return 0;
    }
});
mockDataNew.reverse();

mockDataNew.forEach((item, n) => {
    var newProduct = document.createElement("div");

    newProduct.classList.add("ranking");
    newProduct.innerHTML = `
    <a class="ranking_img" href="${item.link}"><img src="${item.picture
        }" alt=""></a>
    <h3 class="fs14">${n + 1 < 10 ? "0" + (n + 1) : n + 1}</h3>
    <div class="review_">
      <h4 class="fs16 fw700"><a href="${item.link}" title="${item.name}"> ${item.name
        } </a></h4>
      <p class="fs12 fw400"><a href="" title="${item.text}"> ${item.text
        } </a></p>
      <i class="fas fa-star fs12"> ${item.star}</i></div>
    `;
    list_ranking2.appendChild(newProduct);
});

//RANKING SORT AND SHOW
mockDataRanking.sort(dynamicSort("-star"));

mockDataRanking.forEach((item, n) => {
    var newProduct = document.createElement("div");

    newProduct.classList.add("ranking");
    newProduct.innerHTML = `
    <a class="ranking_img" href="${item.link}"><img src="${item.picture
        }" alt=""></a>
    <h3 class="fs14">${n + 1 < 10 ? "0" + (n + 1) : n + 1}</h3>
    <div class="review_">
      <h4 class="fs16 fw700"><a href="${item.link}" title="${item.name}"> ${item.name
        } </a></h4>
      <p class="fs12 fw400"><a href="" title="${item.text}"> ${item.text
        } </a></p>
      <i class="fas fa-star fs12"> ${item.star}</i></div>
    `;
    list_ranking1.appendChild(newProduct);

    var newProduct = document.createElement("div");
    newProduct.classList.add("ranking");
    newProduct.innerHTML = `
    <a class="ranking_img" href="${item.link}"><img src="${item.picture
        }" alt=""></a>
    <h3 class="fs14">${n + 1 < 10 ? "0" + (n + 1) : n + 1}</h3>
    <div class="review_">
      <h4 class="fs16 fw700"><a href="${item.link}" title="${item.name}"> ${item.name
        } </a></h4>
      <p class="fs12 fw400"><a href="" title="${item.text}"> ${item.text
        } </a></p>
      <i class="fas fa-star fs12"> ${item.star}</i>
      </div>
    `;
    list_ranking3.appendChild(newProduct);
});

var list_ranking3 = document.querySelector(".list_starlet");
mockDataFeatures.forEach((item, n) => {
    if (n < 8) {
        var newProduct = document.createElement("div");

        newProduct.classList.add("starlet");
        newProduct.innerHTML = `
    <a href=""><img src="${item.picture}" alt=""></a>
    <h4 class="fs16"><a href="" title="${item.name}"> ${item.name} </a></h4>
    <p class="fs14 fw400"><a href="" title="${item.text}"> ${item.text} </a></p>
    `;
        list_ranking3.appendChild(newProduct);
    }
});

var list_fictions = document.querySelector(".list_fictions");

mockDataFeatures.forEach((item, n) => {
    if (n < 9) {
        var newProduct = document.createElement("div");

        newProduct.classList.add("fiction");
        newProduct.innerHTML = `
    <p><img src="${item.picture}" alt=""></p>
    `;
        list_fictions.appendChild(newProduct);
    }
});

var fictions_reviews = document.querySelector(".fictions_reviews");

mockDataFeatures.forEach((item, n) => {
    if (n < 9) {
        var newProduct = document.createElement("div");

        newProduct.classList.add("fictions_review");
        newProduct.innerHTML = `
      <div class="fictions_img">
        <a href="###"><img src="${item.picture}" alt=""></a>
      </div>
      <div class="title">
          <h4 class="fs20">${item.name}</h4>
          <h5 class="fs12 mb-0">${item.text}</h5>
          <p class="fs12 mb-0">In a time when the Divine Prefectures of the East Sea were in great
          disarray, Emperor Ye Qing and Donghuang the Great appeared to save the day...
          </p>
          <div class="read_now d-flex">
            <a href="${item.link}"><b class="fs14">READ NOW</b></a>
            <i class="fas fa-plus ms-2"></i>
          </div>
      </div>
    `;
        fictions_reviews.appendChild(newProduct);
    }
});
fictions_reviews.firstElementChild.classList.add("show");

function fictions() {
    var f_reviews = document.querySelectorAll(".fictions_review");
    var f_list = document.querySelectorAll(".list_fictions div");
    let ing = 0;

    f_list.forEach((item, n) => {
        item.addEventListener("click", function () {
            if (n != ing) {
                f_reviews[n].classList.add("show");
                f_reviews[ing].classList.remove("show");
                ing = n;
            }
        });
    });
}

fictions();

var fictions_cheering = document.querySelector(".cheering_reads");
mockDataFeatures.forEach((item, n) => {
    if (n < 6) {
        var newProduct = document.createElement("div");

        newProduct.classList.add("cheering");
        newProduct.innerHTML = `
      <a href="${item.link}"><img src="${item.picture}" alt=""></a>
      <div class="text">
          <a href="${item.link}"><h4 class="fs14 fs700">${item.name}</h4></a>
          <a href="${item.text == "Action" ? "brower_action_male.html" : ""
            }"><p class="fs12 fs400">${item.text}</p></a>
      </div>
    `;
        fictions_cheering.appendChild(newProduct);
    }
});

var list_tags = document.querySelector(".popular_tags .list_tags");
mockDataTags.forEach((item) => {
    var newProduct = document.createElement("div");

    newProduct.classList.add("tag");
    newProduct.innerHTML = `
      <a href="" title="${item.tag}"><h3 class="fs14 fw600">${item.tag}</h3></a>
    `;
    list_tags.appendChild(newProduct);
});

// ------------------------NOTIFICATION------------------------------

const toasts = {
    success: {
        icon: '<i class="fas fa-check-circle"></i>',
        noti: "This is a success notification !",
    },
    error: {
        icon: '<i class="fas fa-exclamation-circle"></i>',
        noti: "This is a error notification !",
    },
    warning: {
        icon: '<i class="fas fa-exclamation-triangle"></i>',
        noti: "This is a warning notification !",
    },
    email_error: {
        icon: '<i class="fas fa-exclamation-triangle"></i>',
        noti: "Your Email's incorrect. Again!",
    },
    email_success: {
        icon: '<i class="fas fa-exclamation-triangle"></i>',
        noti: "Your Email's correct. Thanks!",
    },
    re_pass_error: {
        icon: '<i class="fas fa-exclamation-triangle"></i>',
        noti: "Password and Re-Password aren't match!",
    },
    gmail_error: {
        icon: '<i class="fas fa-exclamation-triangle"></i>',
        noti: "Please fill your Gmail. Thanks!",
    },
    username_error: {
        icon: '<i class="fas fa-exclamation-triangle"></i>',
        noti: "Username already exitst. Please try!",
    },
    sign_up_success: {
        icon: '<i class="fas fa-exclamation-triangle"></i>',
        noti: "Sign up account success. Thanks <3",
    },
    login_success: {
        icon: '<i class="fas fa-exclamation-triangle"></i>',
        noti: "Login account success. Thanks <3",
    },
    login_error: {
        icon: '<i class="fas fa-exclamation-triangle"></i>',
        noti: "Your username or password is incorrect!",
    },
};

function notification_f(status) {
    let toast = document.createElement("div");
    toast.className = `toast ${status}`;
    toast.classList.add('showing');

    toast.innerHTML = `
    ${toasts[status].icon}
    ${toasts[status].noti}
    <span class="timeline"></span>
    `;

    console.log(123);

    document.querySelector(".notification").appendChild(toast);
    setTimeout(() => {
        toast.style.animation = "slide_hide 2s ease forwards";
        setTimeout(() => {
            toast.remove();
        }, 2100);
    }, 4100);
}

document.querySelector(".email a").addEventListener("click", signup);

function signup() {
    const email_in = document.querySelector(".email input").value;

    if (email_in.match(rex_e)) {
        notification_f("email_success");
        sendEmail(email_in);
    } else {
        notification_f("email_error");
    }
}

function sendEmail(email) {
    Email.send({
        SecureToken: "f755e7ff-d3ea-40bc-b5ac-e25a8e6d881f",
        To: email,
        From: "sypx.21it@vku.udn.vn",
        Subject: "Welcome to DIRTYLESC",
        Body: "Cảm ơn bạn đã đăng kí nhận thông báo về các mẫu truyện mới nhất. Cùng đồng hành với chúng tôi. <3",
    }).then((message) => alert("Đăng kí nhận thông báo thành công!"));
}

// ////Log_In And Sign_Up
var log_in_btn = document.getElementById("ha");
var sign_up_btn = document.getElementById("dha");
var forget_pass_btn = document.getElementById("fa");
var log_in_temp = document.querySelector(".log_in");

var form_login;
var form_register = $("#form_register").detach();
var form_content = $("#form_content");

if (log_in_temp)
    log_in_temp.onclick = () => {
        $('.log_function').addClass('hold_show')
    }

sign_up_btn.onclick = () => {
    form_login = $("#form_login").detach();
    form_content.append(form_register);
};

log_in_btn.onclick = () => {
    form_register = $("#form_register").detach();
    form_content.append(form_login)
};

// log_in_btn.onclick = () => {
//     document.getElementById("ul_login").style.display = "block";
//     document.getElementById("ul_signup").style.display = "none";
// };

///Check Account To Sign Up or Login
const rex_e = /^\w+([.]\w+)?@\w+\.\w+(\.\w+)?$/;
let vitri = 1;

// document.getElementById("submit_2").onclick = () => {
//     let check = true;
//     for (let i = 0; i < vitri; i++)
//         if (
//             document.querySelector("#username_signup input").value ===
//             listUser[i]
//         )
//             check = false;

//     if (check) {
//         if (
//             document.querySelector("#username_signup input").value.trim() != ""
//         ) {
//             if (document.querySelector("#gmail input").value.match(rex_e)) {
//                 if (
//                     document.querySelector("#password_signup input").value ===
//                     document.querySelector("#re_password input").value &&
//                     document
//                         .querySelector("#password_signup input")
//                         .value.trim() != "" &&
//                     document.querySelector("#re_password input").value.trim() !=
//                     ""
//                 ) {
//                     listUser[vitri] = document.querySelector(
//                         "#username_signup input"
//                     ).value;
//                     listPass[vitri] = document.querySelector(
//                         "#password_signup input"
//                     ).value;
//                     document.querySelector("#username_login input").value = "";
//                     document.querySelector("#password_login input").value = "";
//                     document.querySelector("#username_signup input").value = "";
//                     document.querySelector("#password_signup input").value = "";
//                     document.querySelector("#gmail input").value = "";
//                     document.querySelector("#re_password input").value = "";

//                     document.getElementById("ul_login").style.display = "block";
//                     document.getElementById("ul_register").style.display = "none";
//                     vitri++;

//                     notification_f("sign_up_success");
//                 } else notification_f("re_pass_error");
//             } else notification_f("gmail_error");
//         }
//     } else notification_f("username_error");
// };

document.getElementById("log_out_btn").onclick = () => {
    document.querySelector(".user-function").style.display = "none";
    document.querySelector(".log_in").style.display = "block";
};

// document.getElementById("submit_1").onclick = () => {
//     let i = 0;
//     if (vitri == 0) notification_f("login_error");
//     else {
//         for (; i < vitri; i++) {
//             if (
//                 document.querySelector("#username_login input").value ===
//                 listUser[i] &&
//                 document.querySelector("#password_login input").value ===
//                 listPass[i]
//             ) {
//                 notification_f("login_success");

//                 setInterval(function () {
//                     document
//                         .querySelector(".log_function")
//                         .classList.remove("hold_show");
//                     document.querySelector("#username_login input").value = "";
//                     document.querySelector("#password_login input").value = "";
//                     document.querySelector(".user_login").style.display =
//                         "block";
//                     document.querySelector(".log_in").style.display = "none";
//                 }, 4000);

//                 if (listUser[i].includes("admin"))
//                     document.getElementById(
//                         "my_profile"
//                     ).innerHTML += `<i class="fas fa-user"></i><a href="admin.html">My Profile</a>`;
//                 else
//                     document.getElementById(
//                         "my_profile"
//                     ).innerHTML += `<i class="fas fa-user"></i><a href="user_info.html?id=${listUser[i]}">My Profile</a>`;
//                 break;
//             }
//         }
//     }
// };
$(document).ready(function () {
    $("#nothing").click(function () {
        $(".log_function").removeClass("hold_show");
    });

    $("#close_box").click(function () {
        $("#contact-box").remove();
    });
});
