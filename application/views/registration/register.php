<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <!--<link rel="stylesheet" href="style.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        <?php include 'style.css';?>
    </style>
    
</head>

<body>

    <div class="container p-3 pt-5 mt-5 ">
        <h1 class="heading text-center mt-5"> Ready to learn and contribute to the community? </h1>
        <p class="subheading text-center pb-4"> Register and take on whatever is on your mind. </p>

        <div class="row pb-5 pt-2 col-lg-8 mx-auto border border-dark">
            <h3 class="pt-3 pb-1 text-center">
                 <?= $title;?>
            </h3>

            <form method="post" class="col-8 " action="<?php echo base_url('registration/register'); ?>">

                <div class="p-3">

                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" name="password2" placeholder="Confirm Password" required>
                    </div>

                    <?php echo validation_errors(); ?>
                    <div class="form-footer d-flex justify-content-between">
                        <button type="submit" class="btn btn-custom " id="sub1" disabled="disabled">Register</button>

                        <div class="signin ms-2 lead align-middle">
                            Already a member? 
                            <a href="<?php echo base_url('login'); ?>" class="link-custom text-decoration-none">Sign in</a>
                        </div>

                    </div>

                </div>

            </form>

            <form method="dialog" class="col-4 ">

                <div class=" tcbox pt-3 ">
                    <h6 class="text-center">
                        Terms & Conditions
                    </h6>
                </div>

                <div class="terms mx-auto border p-3 pr-4">
                    <p>
                        <b>AGREEMENT TO TERMS</b>
                        </h6>
                        <p>No one under 13 is allowed to use or access the Services. We may offer additional Services that require you to be older to use them, so please read all notices and any Additional Terms carefully when you access the Services.</p>

                        <p> By using the Services, you state that:</p>

                        <ul>You are at least 13 years old and over the minimum age required by the laws of your country of residence to access and use the Services;</ul> 
                        <ul>You can form a binding contract with Commhub, or, if you are over 13 but under the age of majority in your jurisdiction, that your legal guardian has reviewed and agrees to these Terms; </ul>
                        <ul>You are not barred from using the Services under all applicable laws; and</ul>
                        <ul>You have not been permanently suspended or removed from the Services.</ul>

                        <p>You understand that through your use of the Services, you consent to the collection and use of this information.</p>
                        <p> If you are accepting these Terms on behalf of another legal entity, including a business or government entity, you represent that you have full legal authority to bind such entity to these Terms. </p>

                        </p>
                </div>

                <div class="checkbox form-check pt-2 ">
                    <input class=" form-check-input border-warning" type="checkbox" id="termsChkbx " onclick="change_button(this,'sub1')" />
                    <label class=" form-check-label " for="flexCheckDefault">
					  I accept all the <strike>Terms and Condition</strike>  cool stuff. 
					</label>
                </div>

            </form>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script type="text/javascript">
        function change_button(checkbx, button_id) {
            var btn = document.getElementById(button_id);
            if (checkbx.checked == true) {
                btn.disabled = "";
            } else {
                btn.disabled = "disabled";
            }
        }
    </script>
</body>

</html>