<?php include 'head.php'; ?>

<?php startblock('title') ?>
   Home
<?php endblock() ?>


<?php startblock('page_content') ?>
    <section class = "cta">
        <div class = "cta__content">
            <h1 class = "cta__title">Bringing Melbourne Uni's Christian Community Together</h1>
            <h1 class = "cta__facebook">
                Meet us on Facebook!
            </h1>
            <a href = "https://www.facebook.com/mucu0/" class = "cta__facebook-logo">
                <i class="fab fa-facebook fa-10x"></i>
            </a>

        </div>
        <div class = "cta__form">
            <form action="#" class="form" style = "display:none">

                <div class="form__group">
                    <input type="text" class="form__input" placeholder = "Full Name" id = "name" required>
                    <label for="name" class="form__label">Full Name</label>
                </div>
                <div class="form__group">
                    <input type="text" class="form__input" placeholder = "Email Address" id = "email" required>
                    <label for="email" class="form__label">Email Address</label>
                </div>
                <div class="form__group">

                </div>
            </form>
            <div class="u-margin-bottom-big">
                <h1 class="heading-big">
                    Want to know more?
                </h1>
            </div>
            <a class="btn btn--white btn--small" href = "https://docs.google.com/forms/d/e/1FAIpQLSfLQ5IIdHy0a1vPftsNShS7g1T_aR0A9nO0r9i7Iag2_FRl9A/viewform">
                Sign Up!
            </a>
        </div>


    </section>

	<section class = "main-about">
        <div class = "main-about__content">
            <h1 class = "main-about__title">
                A Christian community on Campus
            </h1>
            <p class = "main-about__text">
                Christian Union (CU) is a Christian Club at Melbourne University. Each week we hold numerous events ranging from bible studies, prayer groups, Public Bible Talks to casual social events. Anyone and everyone is welcome to come to any of our events. Whether you identify as a Christian, are curious about Christianity or have never thought about it— we would love to chat with you about God or even just about settling into life at University. Check out our events page and give our Facebook page a like to find out when and where each of our events are being held. 
            </p>
        </div>
        <div class = "main-about__gallery">
            <div class = "main-about__img main-about__img--1"></div>
            <div class = "main-about__img main-about__img--2"></div>
            <div class = "main-about__img main-about__img--3"></div>
            <div class = "main-about__img main-about__img--4"></div>
        </div>
    </section>



<?php endblock() ?>
