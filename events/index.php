<?php include '../head.php'; ?>

<?php startblock('title') ?>
   Events
<?php endblock() ?>

<?php startblock('page_content') ?>

<!-- WHEN YOU DON"T UNDERSTAND WHAT THE GUY BEFORE YOU WROTE SO YOU JUST KEEP IT-->
<!-- JUST CU THINGS -->

<!-- LOLS -->
<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script> -->

<section class="events">
    <h1 class = "section-title events__title">
        CU for this semester
    </h1>
    <p class = "section-subtext events__subtext">
        We run multiple events every week. Big events like camps and uni-wide meetups occur a couple of times every semester.
        We would love to see you there!
    </p>
    <div class="events__row">
        <div class="event event--summit">
            <div class="event__title">
                Summit 2018
            </div>
            <a class="event__btn" href="https://www.facebook.com/events/228380964394611/">
                Learn More
            </a>
        </div>
        <div class="event event--trivia-night">
            <div class="event__title">
                Trivia Night
                <span class = "event__subtitle">
                    Wed Week 10
                </span>
            </div>
        </div>
        <div class="event event--cross-culture">
            <div class="event__title">
                Cross Cultures
            </div>
            <a class = "event__btn" href = "https://www.facebook.com/crosscultures.melbourne/">
                Learn More
            </a>
        </div>
    </div>
    <div class="events__row">
        <div class="event event--forum">
            <div class="event__title">
                Weekly Forum
            </div>
            <a class="event__btn" href="https://www.facebook.com/raisethebar0/">
                Learn More
            </a>
        </div>
        <div class="event event--pbt">
            <div class="event__title">
                Public Bible Talks 1AM Every TUE/ WED
            </div>
            <a class="event__btn scroll"  data-id = "pbt">
                Learn More
            </a>
        </div>
        <div class="event event--bible-study">
            <div class="event__title">
                Weekly Bible Study
            </div>
            <a class="event__btn scroll"  data-id = "bible-study">
                Learn More
            </a>
        </div>
    </div>
    <div class="events__row">
        <div class="event event--tnt">
            <div class="event__title">
                SPT
                <span class = "event__subtitle">
                    (Share Pray Train)
                </span>
            </div>
            <a class="event__btn scroll"  data-id="tnt">
                Learn More
            </a>
        </div>
        <div class="event event--camps">
            <div class="event__title">
                Faculty, uni-wide and national camps
            </div>
            <a class="event__btn scroll"  data-id ="camps">
                Learn More
            </a>
        </div>
    </div>
</section>

<section class="event-details">
    <div class="event-details--pbt event-detail" id = "pbt">
        <h1 class="event-details__title section-title">Public Bible Talks</h1>
        <h1 class="event-details__subtext section-subtext">
            Listen to our sermons delivered right on campus
        </h1>
        <p class = "event-details__content">
            PBT is a great opportunity to meet other students in Christian Union. The weekly talks also provides a friendly opportunity to invite friends to hear from God's word! Each week involves the exploration of a new Bible passage, Christian Union activities and events announcements, as well as the occasional free BBQ following the talk.
        <p>
    </div>
    <div class="event-details--bible-study event-detail"  id = "bible-study">
        <h1 class="event-details__title section-title">Bible Studies</h1>
        <h1 class="event-details__subtext section-subtext">
            Get to know us while learning God's teachings
        </h1>
        <p class = "event-details__content">
            Smaller than PBT, bible studies foster friendships and encourage active discussion of weekly bible passages. Bible studies are formed within faculty groups and meet weekly at various times throughout the week. This gives everyone a lot of flexibility in choosing which bible study to join.
        <p>
    </div>
    <div class="event-details--tnt event-detail"  id = "tnt">
        <h1 class="event-details__title section-title">TNTs</h1>
        <h1 class="event-details__subtext section-subtext">
            Forge an intimate relationship through prayer
        </h1>
        <p class = "event-details__content">
            Triplets and Training, or TNTs, are intimate prayer groups of three to five people that aim to support one another and the wider community through prayer and fellowship. TNTs gives the opportunity to actively pray for each other and other students at the university, as well as equip each other to spread the gospel with their peers.
        <p>
    </div>
    <div class="event-details--camps event-detail"  id = "camps">
        <h1 class="event-details__title section-title">Camps</h1>
        <h1 class="event-details__subtext section-subtext">
            Experience the scale of CU on one of our camps
        </h1>
        <p class = "event-details__content">
            From Gear Up to Base Camp to Summit, Christian Union runs several camps throughout the year. Each camp explores an aspect of Christian faith with slightly different emphasis at different points in the year. Gear Up prepares students spiritually for the upcoming year while Base Camp is a time for faculty groups to grow together and establish God's word in their lives. During the winter break, Summit brings all of Melbourne Uni Christian Union together for a week of praising God, hearing from his word, and having fun with new friends! The final camp, national training event, or NTE, is held in Canberra at the end of the year and is designed to solidify the year that has passed, as well as prepare Christians from across the country to take on the future with confidence and power from God's word.
        <p>
    </div>
    <div class="event-details--camps event-detail"  id = "camps">
        <h1 class="event-details__title section-title">Cross Cultures</h1>
        <h1 class="event-details__subtext section-subtext">
            For international students
        </h1>
        <p class = "event-details__content">
            At Cross Cultures, we make friends and meet Jesus. We meet from 6-9.30pm on Thursdays at St Jude's Anglican Church, 2 Keppel Street, Carlton (just a short walk from Melbourne Uni). Every Thursday we have dinner, make friends, and read the Bible together to get to know Jesus. It doesn't matter if you have never read the Bible before or if you have been a Christian all your life, everyone is welcome!
        <p>
    </div>



</section>

<!-- <div class="col-sm-5">
	<h2>Facebook Events!</h2>
  <div class="fb-page" data-href="https://www.facebook.com/mucu0" data-tabs="events" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/mucu0"><a href="https://www.facebook.com/mucu0">Melbourne University Christian Union</a></blockquote></div></div>
</div> -->


<?php endblock() ?>
