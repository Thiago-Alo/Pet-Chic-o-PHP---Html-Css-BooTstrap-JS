const container  = document.querySelector(".container"),
      pwShowHide  = document.querySelectorAll(".showHidePw"),
      pwEye  = document.querySelectorAll(".password"),
      signUp  = document.querySelector(".signup-link"),
      login  = document.querySelector(".login-link");

      //js code to show/hide pass and icon
      pwShowHide.forEach(eyeIcon =>{
          eyeIcon.addEventListener("click", ()=>{
              pwEye.forEach(eye =>{
                  if(eye.type === "password"){
                      eye.type = "text";

                      pwShowHide.forEach(icon =>{
                         icon.classList.replace("uil-eye-slash","uil-eye");
                      })
                  }else{
                     eye.type = "password";

                     pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye","uil-eye-slash");
                    })
                  }
              })
          })
      })

      //js code to appear signup and login form
      signUp.addEventListener("click", ( )=>{
        container.classList.add("active");
      });
     login.addEventListener("click", ( )=>{
        container.classList.remove("active");
     });