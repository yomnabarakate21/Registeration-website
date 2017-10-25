<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
$( "#sign_up_form" ).validate({
  rules: {
    username: {
      required: true,
      name: true
    }
, email: {
  required: true,
  email: true
}

  }
});
