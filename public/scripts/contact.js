const inputBoxes = document.querySelectorAll('.form .inputBx');

setTimeout(() => {
    inputBoxes.forEach(function(inputBox, index) {
        if(inputBoxes.length > index) {
            setTimeout(function() {
                setInterval(function() {
                    inputBox.classList.add("show");
                }, 200);
            }, index * 200);
        }
    }); 
}, 500);