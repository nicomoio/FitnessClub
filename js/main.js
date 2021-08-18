let navLinks = document.getElementById("navLinks")
function showMenu(){
    navLinks.style.right = "0"
}
function hideMenu(){
    navLinks.style.right = "-200px"
}
let x = document.getElementById("login")
let y = document.getElementById("register")
let z = document.getElementById("btn")

function register(){
    x.style.left = "-400px"
    y.style.left = "50px"
    z.style.left = "110px"
}
function login(){
    x.style.left = "50px"
    y.style.left = "450px"
    z.style.left = "0px"
}