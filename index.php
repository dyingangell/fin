<?php
	require_once 'include/db.php';
	$gmail = $_POST[gmail];
	$sql = "INSERT INTO gmails (gmail) VALUES ('$gmail')";
	if ($mysql->query($sql) === TRUE){
		echo "данные отправленный";
	} else{
		echo "eror";
	}
	$mysql->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/main.min.js" async></script>
	
	<title>project-first</title>
</head>

<body>
	<div class="wraper">
		<header class="header">
	<div class="contener">
		<div class="header__body">
			<div class="burger-menu">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="header__logo">
				<img src="img/Group 4.svg" alt="">
			</div>
			<ul class="header__menu menu">
				<li class="menu__close burger-menu">
					<img src="img/icon.svg" alt="">
				</li>
				<li class="menu__list"><a href="#" class="menu__link">Black</a></li>
				<li class="menu__list"><a href="#" class="menu__link">Green</a></li>
				<li class="menu__list"><a href="#" class="menu__link">White</a></li>
				<li class="menu__list"><a href="#" class="menu__link">Oolong</a></li>
				<li class="menu__list"><a href="#" class="menu__link">Pu-erh</a></li>
				<li class="menu__contact">
					<div class="menu__contact-main">
						<span class="menu__contact-text">Contact Us</span>
						<span class="menu__contact-text">Our Blog</span>
						<span class="menu__contact-text">Shipping and Delivery</span>
					</div>
					<div class="menu__contact-icons">
						<a href="#"><img src="img/market-icon.svg" alt="" class="menu_contact-svg"></a>
						<a href="#"><img src="img/human-icon.svg" alt="" class="menu_contact-svg"></a>	
						<a href="#"><img src="img/search-icon.svg" alt="" class="menu_contact-svg"></a>
					</div>
				</li>
			</ul>
			<div class="menu__action">
				<a href="#" class="menu__icon"><img src="img/market-icon.svg" alt=""></a>
				<a href="#" class="menu__icon"><img src="img/human-icon.svg" alt=""></a>
				<a href="#" class="menu__icon menu__icon-search"><img src="img/search-icon.svg" alt=""></a>
			</div>
		</div>
	</div>
</header>
		<div class="main__screen">
			<div class="contener">
				<div class="main__row">
					<div class="main__title">A cup of tea is a moment of calm in the chaos of life</div>
					<div class="main__subtitle">Wide selection of high-quality teas from all over the world, carefully curated by tea experts.</div>
				</div>
			</div>
		</div>
		<div class="colection">
			<div class="contener">
				<div class="colection__row">
					<div class="colection__phrase">"Tea is not just a drink, it's a way of life and a way to connect with our loved ones."</div>
					<div class="colection__title">
						Explore our Collections
					</div>
					<ul class="colection__teas">
						<li class="colection__item">
							<img src="img/tea-black.png" alt="">
							<div class="clt__item-text">Black</div>
						</li>
						<li class="colection__item">
							<img src="img/tea-green.png" alt="">
							<div class="clt__item-text">Green</div>
						</li>
						<li class="colection__item">
							<img src="img/tea-oolong.png" alt="">
							<div class="clt__item-text">Oolong</div>
						</li>
						<li class="colection__item">
							<img src="img/tea-pu_crh.png" alt="">
							<div class="clt__item-text">Pu-erh</div>
						</li>
						<li class="colection__item">
							<img src="img/tea-white.png" alt="">
							<div class="clt__item-text">White</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clients">
			<div class="contener clients__contener">
				<div class="clients__row">
					<div class="clients__title">
						What our Clients say
					</div>
					<ul class="clients__list">
						<li class="clients__item">
							<div class="clients__text">"As a tea enthusiast, I have tried teas from all over the world, but this tea store truly stands out. Their teas are of the highest quality and the variety is impressive. This is definitely a tea store that every tea lover should visit."</div>
							<div class="clients__author">Alice</div>
						</li>
						<li class="clients__item">
							<div class="clients__text">"This tea store is my go-to for all my tea needs. Their selection is unbeatable and the quality of their teas is exceptional."</div>
							<div class="clients__author">Mad-Hatter</div>
						</li>
						<li class="clients__item clients__item_del ">
							<div class="clients__text">"If you're a tea lover, you must visit this tea store. The selection is vast and the quality is outstanding. I guarantee you won't be disappointed."</div>
							<div class="clients__author">Dormouse</div>
						</li>
						<li class="clients__item clients__item_del clients__item_del-wtf">
							<div class="clients__text">"I am not a big tea drinker, but this tea store has converted me. I highly recommend this tea store to anyone looking for a high-quality tea experience."</div>
							<div class="clients__author">March Hare</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="blog">
			<div class="contener blog__contener">
				<div class="blog__row">
					<div class="blog__main-title">
						Our Tea Blog
					</div>
					<div class="blog__images">
						<div class="blog__item blog__item-left">
							<div class="blog__img ibg">
								<img src="img/blog_1.jpg" alt="">
							</div>
							<div class="blog__item-text">
								<div class="blog__title">
									Tea Time Travels: Funny Moments from Around the World
								</div>
								<div class="blog__text">
									<div class="blog__author">by Robinson Crusoe</div>
									<a href="#" class="blog__read">Read <img src="img/arrow.svg" alt=""> </a> 
								</div>
								</div>
						</div>
						<div class="blog__item blog__item-right">
							<div class="blog__img ibg">
								<img src="img/blog_2.jpg" alt="">
							</div>
							<div class="blog__item-text">
								<div class="blog__title">The Role of Tea in Mental Health</div>
								<div class="blog__text">
									<div class="blog__author">by Joker</div>
									<a href="#" class="blog__read">Read <img src="img/arrow.svg" alt=""> </a> 
								</div>
								</div>
						</div>
						<div class="blog__item blog__item-left blog__item-del">
							<div class="blog__img ibg">
								<img src="img/blog_3.jpg" alt="">
							</div>
							<div class="blog__item-text">
								<div class="blog__title">Tea-rific Tales: Hilarious Stories from Tea Lovers</div>
								<div class="blog__text">
									<div class="blog__author">by Casper the Friendly Ghost</div>
									<a href="#" class="blog__read">Read <img src="img/arrow.svg" alt=""> </a> 
								</div>
								
							</div>
						</div>
						<div class="blog__item blog__item-right blog__item-del">
							<div class="blog__img ibg">
								<img src="img/blog_4.jpg" alt="">
							</div>
							<div class="blog__item-text">
								<div class="blog__title">Tea and Caffeine: Effects on the Brain and Behavior</div>
								<div class="blog__text">
									<div class="blog__author">by Author Authorius</div>
									<a href="#" class="blog__read">Read <img src="img/arrow.svg" alt=""> </a> 						
								</div>
								</div>
						</div>
					</div>
					<button>
						<a href="" class="blog__btn">View all</a>
					</button>
					
				</div>
			</div>
		</div>
		<div class="join">
			<div class="contener">
				<div class="join__row">
					<div class="join__title">Want to know more?</div>
					<div class="join__main">
						<div class="join__text">	
							<div class="join__subtitle">
								Join our mailing list and stay up-to-date with the latest news, promotions, and exclusive offers from our tea store. Be the first to know about new tea arrivals, seasonal blends, and special discounts. Don't miss out on the tea-rrific perks - sign up today!
							</div>
						</div>
						<div class="join__form">
							<form method='post' action="index.php">
								<div class="join__request">
									<p><input name='gmail' class='join__input' placeholder="name@email.com" type="email"> <input type="submit" class="join__btn" value="Join"></input> </p>
								</div>
								<div class="join__check-box">
									<input type="checkbox">
									<div class="check-box__text"> We take your privacy seriously and are committed to protecting your personal information. By subscribing to our mailing list, you are consenting to receive periodic emails from us about our products, promotions, and other tea-related information.</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="prio">
			<div class="contener prio__contener">
				<div class="prio__row">
					<div class="prio__title">
						We Prioritise
					</div>
					<div class="prio__list">
						<div class="prio__item">
							<div class="prio__text">Single garden teas</div>
							<div class="prio__subtitle">Complete transparency</div>
							<div class="prio__img"><img src="img/prio-world.svg" alt=""></div>
						</div>
						<div class="prio__item">
							<div class="prio__text">Only Loose leaf tea</div>
							<div class="prio__subtitle">Best Drinking Experience</div>
							<div class="prio__img"><img src="img/prio-leaves.svg" alt=""></div>
						</div>
						<div class="prio__item">
							<div class="prio__text">Customer support</div>
							<div class="prio__subtitle">No bots, no automated replies</div>
							<div class="prio__img"><img src="img/prio-headfhone.svg" alt=""></div>
						</div>
						<div class="prio__item">
							<div class="prio__text">Fast shipping</div>
							<div class="prio__subtitle">Save, Convenient, Reliable</div>
							<div class="prio__img"><img src="img/prio-box.svg" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
	<div class="contener">
		<div class="footer__row">
			<ul class="footer__list">
				<li class="footet__item_title title">Products</li>
				<li class="footer__item"><a href="#">Black tea</a></li>
				<li class="footer__item"><a href="#">Green tea</a></li>
				<li class="footer__item"><a href="#">White tea</a></li>
				<li class="footer__item"><a href="#">Oolong tea</a></li>
				<li class="footer__item"><a href="#">Pu-erh tea</a></li>
			</ul>
			<ul class="footer__list">
				<li class="footet__item_title title">Company</li>
				<li class="footer__item"><a href="#">About Us</a></li>
				<li class="footer__item"><a href="#">Contact Us</a></li>
				<li class="footer__item"><a href="#">Our Blog</a></li>
				<li class="footer__item"><a href="#">FAQ</a></li>
				<li class="footer__item"><a href="#">Shipping & Delivery</a></li>
				<li class="footer__item"><a href="#">Refund policy</a></li>
				<li class="footer__item"><a href="#">Terms of Service</a></li>
			</ul>
			<div class="footer__social">
				<div class="footer__text">
					<div class="footer__saying">“Tea is a journey. It can take you to new places and open your mind to new experiences. Let every sip transport you to a world of wonder and possibility”</div>
					<div class="footer__author">Dragomir Teodorescu, Tealuxe owner</div>
				</div>
				<div class="footer__stay">
					<div class="footer__title title">Stay In Touch</div>
					<div class="footer__subtitle">Please feel free to contact us via the email of phone. We would be happy to hear from you! </div>
					<div class="footer__socail__links">
						<div class="footer__fhone">
							<div class="footer__logo"><img src="img/Group 4.svg" alt=""></div>
							<div class="footer__fhone-logos">
								<p><img src="img/mail.svg" alt=""> +370 680 123456</p>
								<p><img src="img/fhone.svg" alt=""> info@tealuxe.com</p>
							</div>
						</div>
						<div class="footer__logos">
							<img src="img/facebook.svg" alt="">
							<img src="img/youtube.svg" alt="">
							<img src="img/instagram.svg" alt="">
							<img src="img/twiter.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__bottom">
			<div class="bottom__text">© Tealuxe, 2023</div>
			<div class="bottom__logos">
				<img src="img/logos_mastercard.svg" alt="">
				<img src="img/visa.svg" alt="">
				<img src="img/google-play.svg" alt="">
				<img src="img/paypal.svg" alt="">
			</div>
		</div>
	</div>
</footer>
	</div>


</body>

</html>