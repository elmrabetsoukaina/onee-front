const notifyMe = (text, color = "red", duration=5000, load = false) => {  // 🔴🔴🔴🔴 notification
    load ? avatar =  "./assets/gif/spinner.gif" : avatar = false
    var toastMe =  Toastify({
        text: text,
        duration: duration,
        newWindow: true,
        avatar: avatar,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "left", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            // background: "linear-gradient(to right, #00b09b, #96c93d)",
            background: color
        },
        onClick: function(){
           // alert('e')
        } // Callback after click
        })
        toastMe.showToast();
        return toastMe;

  }