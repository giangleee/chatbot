$(function () {
  $("#form-contact").validate({
    onkeyup: false,
    onfocusout: false,
    rules: {
      company: {
        required: true,
      },
      curator: {
        required: true,
      },
      email: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      type_advice: {
        required: true,
      },
      content: {
        required: true,
      },
      confirm: {
        required: true,
      },
    },
    messages: {
      company: {
        required: "",
      },
      curator: {
        required: "",
      },
      email: {
        required: "",
        email: "メールアドレスが正しくありません。",
      },
      type_advice: {
        required: "",
      },
      content: {
        required: "",
      },
      confirm: {
        required: "チェックボックスをチェックしてください。",
      },
    },
    highlight: function (element) {
      $(element).addClass("form-red");
    },
    unhighlight: function (element) {
      $(element).removeClass("form-red");
    },
    errorPlacement: function (error, element) {
      if (
        element.is("input[name=confirm]") ||
        element.is("input[name=email]")
      ) {
        error.appendTo(element.parent());
      }
    },
    submitHandler: function (form) {
      form.submit();
    },
  });
});
