let btn1 = document.getElementById("projects-code");
let btn2 = document.getElementById("projects-edit");
let projectsProgram = document.querySelector(".projects-programs");
let projectsEdit = document.querySelector(".projects-edition");
btn1.addEventListener("click", () => {
    projectsProgram.classList.toggle("active-projects");
    projectsEdit.classList.remove("active-projects");
})

btn2.addEventListener("click", () => {
    projectsEdit.classList.toggle("active-projects");
    projectsProgram.classList.remove("active-projects");
    setTimeout(()=>{
        projectsEdit.classList.remove("active-projects");
    }, 1000*300)
})

