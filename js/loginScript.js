document.addEventListener("DOMContentLoaded", function() {
    const container = document.getElementsByClassName("section-login")[0];
    
    let shouldRenderLoginForm = false;

    fetch("./components/login-form.html")
        .then(response => response.text())
        .then(content => {
            container.innerHTML = content;
            shouldRenderLoginForm = true;
            const toggleBtn = document.getElementsByClassName("render-login")[0];
            toggleBtn.addEventListener("click", conditionRender);
        })
    .catch(error => {
        console.log(error)
    }); 
    

    function conditionRender () {
        console.log("clicked");
        shouldRenderLoginForm = !shouldRenderLoginForm;

        if (shouldRenderLoginForm) {
            fetch("./components/login-form.html")
                .then(response => response.text())
                .then(content => {
                    container.innerHTML = content;
                    shouldRenderLoginForm = true;
                    const toggleBtn = document.getElementsByClassName("render-login")[0];
                    toggleBtn.addEventListener("click", conditionRender);
                })
            .catch(error => {
                console.log(error)
            }); 
        } else {
            fetch("./components/register-form.html")
                .then(response => response.text())
                .then(content => {
                    container.innerHTML = content;
                    shouldRenderLoginForm = false;
                    const toggleBtn = document.getElementsByClassName("render-login")[0];
                    toggleBtn.addEventListener("click", conditionRender);
                })
            .catch(error => {
                console.log(error)
            }); 
        } 
    }
})

