<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillQuake</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="#"><h4>SkillQuake</h4></a>
            <ul class="nav__menu">
                <li><a href="javascript: document.body.scrollIntoView(true);">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="javascript: document.body.scrollIntoView(false);">Contact</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>
    <header>

        <div class="container header__container">
            <div class="header__left">
                <h1>Discover Your Passion, Embrace the Journey Beyond the Books</h1>
                <p>
                    We're here to help you nurture your talents and explore your interests in a vibrant community. Join us on this exciting adventure of self-discovery and personal growth. Follow your heart and pursue what sets your soul on fire.
                </p>
                <a href="login.php" class="btn btn-primary">Get Started</a>
            </div>
            <div class="header__right">
                <div class="header__right-image">
                    <img src="./images/chess-on-black-background-with-two-children-playing.png">
                </div>
            </div>
        </div>
    </header>



    <section class="categories">
        <div class="container categories__container"> 
            <div class="categories__left">
                <h1>Categories</h1>
                <p>
                    Explore a world of possibilities with our diverse range of categories, carefully curated to fuel your passions. Whether it's music, dance, art, or any other interest, you'll find a community of like-minded enthusiasts ready to share their knowledge and experiences. Dive into your chosen category, discover new talents, and embark on a journey of self-expression. Join us in celebrating the beauty of pursuing your passions.
                </p>
                <a href="courses.php"  class="btn">Learn More</a>
            </div>
            <div class="categories__right">
                <article class="category">
                    <a href="#" class="category-button">
                        <span class="category__icon"><i class="uil uil-grin"></i></span>
                        <h5>Dancing</h5>
                        <p>Groove to your favorite tunes and learn diverse dance styles.</p>
                    </a>
                </article>
                <article class="category">
                    <a href="#" class="category-button">
                        <span class="category__icon"><i class="uil uil-music"></i></span>
                        <h5>Singing</h5>
                        <p>Hit the high notes with singing enthusiasts.</p>
                    </a>
                </article>
                <article class="category">
                    <a href="#" class="category-button">
                        <span class="category__icon"><i class="uil uil-camera-plus"></i></span>
                        <h5>Photography</h5>
                        <p>Capture moments and share visual stories.</p>
                    </a>
                </article>
                <article class="category">
                    <a href="#" class="category-button">
                        <span class="category__icon"><i class="uil uil-restaurant"></i></span>
                        <h5>Cooking</h5>
                        <p>Master culinary arts and share delicious creations.</p>
                    </a>
                </article>
                <article class="category">
                    <a href="#" class="category-button">
                        <span class="category__icon"><i class="uil uil-tennis-ball"></i></span>
                        <h5>Sports</h5>
                        <p>Stay active, connect with athletes, and pursue fitness.</p>
                    </a>
                </article>
                <article class="category">
                    <a href="#" class="category-button">
                        <span class="category__icon"><i class="uil uil-pen"></i></span>
                        <h5>Arts & Creativity</h5>
                        <p>Create, express, and join a vibrant artistic community.</p>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section class="courses">
        <h2>Our Popular Adepts</h2>
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="./images/virat.jpeg" height="225" width="100">
                </div>
                <div class="course__info">
                    <h4>Unlock Your Cricket Potential with Insights from Virat Kohli.</h4>
                    <p>Discover the secrets of cricket excellence in this exclusive course led by cricket legend Virat Kohli. Elevate your game, sharpen your skills, and step up to the crease with confidence.</p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>

            </article>

            <article class="course">
                <div class="course__image">
                    <img src="./images/anirudh.jpeg" height="225" width="100">
                </div>
                <div class="course__info">
                    <h4>Compose, Create, Conquer: The Art of Music with Anirudh.</h4>
                    <p>Embark on a musical journey with Anirudh, the acclaimed composer. Explore the world of melodies, rhythms, and music production in this dynamic course, and let your creativity take center stage.</p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>

            </article>

            <article class="course">
                <div class="course__image">
                    <img src="./images/ss-rajamouli.jpg" height="225" width="100">
                    
                </div>
                <div class="course__info">
                    <h4>Direct Your Epic Journey: Filmmaking with SS Rajamouli.</h4>
                    <p>Enter the world of cinematic brilliance with SS Rajamouli. Learn the art of storytelling, directing, and crafting unforgettable films in this exclusive course.</p>
                    <a href="course.html" class="btn btn-primary">Learn More</a>
                </div>

            </article>


        </div>
    </section>
    <section class="faqs ">
        <h2>Frequently Asked Questions</h2>
        <div class="container faqs__container">
            <article class="faq ">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer"></div>
                    <h4>What is SkillQuake?</h4>
                    <p>SkillQuake is a platform dedicated to helping individuals explore their passions and talents beyond traditional education. We offer a wide range of courses and communities for various interests, such as music, dance, arts, and more.
                    </p>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer"></div>
                    <h4>How do I get started on SkillQuake?</h4>
                    <p>To get started, simply sign up for a SkillQuake account, browse our diverse course offerings, and choose the one that aligns with your interests. Enroll in a course, and you'll gain access to a community of like-minded enthusiasts and expert instructors.</p>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer"></div>
                    <h4>Are the courses on SkillQuake for beginners?

                    </h4>
                    <p>SkillQuake caters to learners of all levels. Our courses are designed to accommodate beginners, intermediate learners, and advanced enthusiasts. You can choose courses that match your skill level and pace of learning.
                    </p>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer"></div>
                    <h4>Who are the instructors on SkillQuake?</h4>
                    <p>SkillQuake collaborates with industry experts, renowned artists, and professionals in various fields. Our instructors are passionate about sharing their knowledge and experiences to help you excel in your chosen passion.</p>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer"></div>
                    <h4>Is SkillQuake suitable for kids and teenagers?</h4>
                    <p>Yes, SkillQuake is suitable for learners of all ages, including kids and teenagers. We offer age-appropriate courses and communities to foster creativity and skill development in younger individuals.
                    </p>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer"></div>
                    <h4>Do I need special equipment for courses?</h4>
                    <p>The equipment and software requirements vary depending on the course you choose. Most courses provide a list of recommended tools or software, and some may offer free alternatives to get you started.</p>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer"></div>
                    <h4>Can I interact with other learners and instructors?</h4>
                    <p>Absolutely! SkillQuake encourages interaction and collaboration. You can engage with fellow learners and instructors through discussion boards, forums, live sessions, and peer reviews, fostering a sense of community.
                    </p>
            </article>
        
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer"></div>
                    <h4>Is there a certificate upon course completion?</h4>
                    <p>Yes, upon successfully completing a course, you will receive a SkillQuake certificate of achievement. This certificate can be a valuable addition to your portfolio or resume, showcasing your dedication and newly acquired skills.</p>
            </article>

            
        </div>

    </section>

    <section class="container testimonials__container mySwiper">
        <h2>Student Testimonials</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-slide" >
                <div class="avatar">
                    <img src="./images/gamer.png">
                </div>
                <div class="testimonial__info">
                    <h5>Yash</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>As a beginner guitarist, I was blown away by the Mastering the Guitar course on SkillQuake. The instructor's expertise and the clear, structured lessons helped me progress quickly. The interactive community is fantastic, and I've even started playing in a local band. SkillQuake is a game-changer for aspiring musicians!</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/man (1).png">
                </div>
                <div class="testimonial__info">
                    <h5>Vamsi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>SkillQuake's Dance Like a Pro course transformed my dance skills. The instructors are incredibly talented, and the step-by-step lessons made learning fun and easy. I've gained so much confidence in my dancing, and I've made friends in the course who share the same passion. Highly recommended!</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/man (2).png">
                </div>
                <div class="testimonial__info">
                    <h5>Vishnu</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>SkillQuake's Culinary Arts course is a culinary dream come true. I've learned to cook like a pro, from basic recipes to gourmet dishes. The course materials are comprehensive, and the community shares amazing cooking tips. I'm now confident in the kitchen and even started my food blog!</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/man.png">
                </div>
                <div class="testimonial__info">
                    <h5>Sandeep</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>I always had an interest in photography, and SkillQuake's course exceeded my expectations. The instructors are experts, and the practical assignments helped me refine my skills. The feedback from peers was invaluable, and I now work as a freelance photographer.</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/woman.png">
                </div>
                <div class="testimonial__info">
                    <h5>Rina</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>SkillQuake's painting course rekindled my love for art. I've explored various painting techniques and found my unique style. The supportive community and instructor guidance encouraged me to participate in art exhibitions. SkillQuake truly nurtures creativity!
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/woman.png">
                </div>
                <div class="testimonial__info">
                    <h5>Rina</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>SkillQuake's painting course rekindled my love for art. I've explored various painting techniques and found my unique style. The supportive community and instructor guidance encouraged me to participate in art exhibitions. SkillQuake truly nurtures creativity!
                    </p>
                </div>
            </article>
        </div>
        <div class="swiper-pagination">
        </div>
    </section>


<footer class="footer">
    <div class="container footer__container">
            <div class="footer__1">
                <a href="index.html" class="footer__logo"><h4>SkillQuake</h4></a>
                <p>Discover Your Passion, Embrace the Journey Beyond the Books</p>
            </div>
        
        <div class="footer__2">
            <h4>For Links</h4>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="courses.html">Courses</a></li>
            <li><a href="contact.html">Contact</a></li>
        </div>

        <div class="footer__3">
            <h4>Privacy</h4>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Refund Policy</a></li>
        </div>

        <div class="footer__4">
            <h4>Contact Us</h4>
            <div>
                <p>+91 9237423467</p>
                <p>dshagdh@gmail.com</p>
            </div>
        

        <ul class="footer__socials">

            <li>
                <a href="#"><i class="uil uil-facebook"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-linkedin"></i></a>
            </li>
        </ul>
    </div>
    
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; SkillQuake</small>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./main.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints:{
            600: {
                slidesPerView: 2,
            }
          }
        });
    </script>
    
</body>
</html>