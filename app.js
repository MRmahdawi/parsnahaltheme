function changeTab(event, tabId) {
    // مخفی کردن تب های فعلی
    var tabs = document.getElementsByClassName('articel-text');
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].style.display = 'none';
    }

    // نمایش تب جدید
    document.getElementById(tabId).style.display = 'block';


    // اضافه کردن کلاس active به دکمه انتخاب شده
    var tabButtons = document.getElementsByClassName('btn-tab');
    for (var i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove('active');
    }
    event.target.classList.add('active');
}



function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "nav-header") {
        x.className += " showmeno";
    } else {
        x.className = "nav-header";
    }

}
