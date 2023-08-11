"use strict";
!function(e) {
    e(".eg-swal-default").on("click", function(e) {
        Swal.fire("A Simple sweet alert Content"),
        e.preventDefault()
    }),
    e(".eg-swal-default-s2").on("click", function(e) {
        Swal.fire("The Internet?", "That thing is still around?"),
        e.preventDefault()
    }),
    e(".eg-swal-success").on("click", function(e) {
        Swal.fire("Good job!", "You clicked the button!", "success"),
        e.preventDefault()
    }),
    e(".eg-swal-info").on("click", function(e) {
        Swal.fire("Good job!", "You clicked the button!", "info"),
        e.preventDefault()
    }),
    e(".eg-swal-warning").on("click", function(e) {
        Swal.fire("Good job!", "You clicked the button!", "warning"),
        e.preventDefault()
    }),
    e(".eg-swal-error").on("click", function(e) {
        Swal.fire("Good job!", "You clicked the button!", "error"),
        e.preventDefault()
    }),
    e(".eg-swal-question").on("click", function(e) {
        Swal.fire("Good job!", "You clicked the button!", "question"),
        e.preventDefault()
    }),
    e(".eg-swal-av1").on("click", function(e) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
            footer: "<a href>Why do I have this issue?</a>"
        }),
        e.preventDefault()
    }),
    e(".eg-swal-av2").on("click", function(e) {
        Swal.fire({
            title: "<strong>HTML <u>example</u></strong>",
            icon: "info",
            html: 'You can use <b>bold text</b>, <a href="//sweetalert2.github.io">links</a> and other HTML tags',
            showCloseButton: !0,
            showCancelButton: !0,
            focusConfirm: !1,
            confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
            confirmButtonAriaLabel: "Thumbs up, great!",
            cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
            cancelButtonAriaLabel: "Thumbs down"
        }),
        e.preventDefault()
    }),
    e(".eg-swal-av2").on("click", function(e) {
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: !1,
            timer: 1500
        }),
        e.preventDefault()
    }),
    e(".eg-swal-av3").on("click", function(e) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!"
        }).then(function(e) {
            e.value && Swal.fire("Deleted!", "Your file has been deleted.", "success")
        }),
        e.preventDefault()
    }),
    e(".eg-swal-av4").on("click", function(e) {
        Swal.fire({
            title: "Sweet!",
            text: "Modal with a custom image.",
            imageUrl: "https://unsplash.it/400/200",
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: "Custom image"
        }),
        e.preventDefault()
    }),
    e(".eg-swal-av5").on("click", function(e) {
        var t;
        Swal.fire({
            title: "Auto close alert!",
            html: "I will close in <b></b> milliseconds.",
            timer: 2e3,
            timerProgressBar: !0,
            onBeforeOpen: function() {
                Swal.showLoading()
            },
            onClose: function() {
                clearInterval(t)
            }
        }).then(function(e) {
            e.dismiss === Swal.DismissReason.timer
        }),
        e.preventDefault()
    })
}((NioApp,
jQuery));
