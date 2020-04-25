<?php include('header.php'); ?>
	<body class="career">
		<div class="header page">
			<div class="nav">
				<div class="logo">
					<a href="/"><img src="images/4.png" alt=""/></a>
				</div>
				
				<div class="menu">
					<a href="#menu-popup" class="open-popup">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
				
				<div class="contact">
					<p>ТЕЛЕФОН ГОРЯЧЕЙ ЛИНИИ</p>	
					<a href="tel:+38 (0532) 65 50 36">+38 (0532) 65 50 36</a>
				</div>
			</div>
		
			<div class="text">
				<h1>Карьера </h1>
				<p>Построй  карьеру в компании мечты!</p>
			</div>
		</div>
		
		<div class="career-content">
			<div class="wrap">
				<div class="text">
					<p>Почему именно наша компания? Потому что мы команда профессионалов, одна из крупнейших дистрибьюторских  компаний на рынке Украины в сфере смазочных материалов и запчастей на автомобили.</p>
					<p>Наша команда качественно и ответственно выполняет свою работу. Благодаря системной работе, увлеченности и профессионализму сотрудников, компания ГПЛ растет, развивается и покоряет новые вершины.</p> 
					<p>Нашей команде нужны именно Вы, если вашими сильными сторонами являются: активность, амбициозность,  упорство, желание развивать себя как профессионала и личность, если вы быстро  учитесь новому и работаете на результат.</p>
					
					<p>Все актуальные вакансии вы можете увидеть на <a href="https://www.work.ua/jobs/by-company/398628/" target="_blank"><img src="https://st.work.ua/i/press_kit/work-ua.png" alt="" style="    margin: -12px 0;
    width: 120px;
"/></a></p>
				</div>
				
				
				<div class="form">
					<h2>Заполните форму обратной связи и наши специалисты <br/>по подбору персонала обязательно с Вами свяжутся.</h2>
					<h3>Мы всегда рады плодотворному сотрудничеству!</h3>
					
					<form action="form-carrer.php" method="post">
						<input type="text" name="name" placeholder="Ваше ФИО" required="">
						<input type="text" name="phone" placeholder="Ваш телефон" required="">
						<input type="email" name="email" placeholder="Ваш E-mail" required="">
										
						<label>
							<input type="file" name="file">
							Прикрепить резюме
						</label>
                        <input type="hidden" name="g-recaptcha-response-career" id="g-recaptcha-response-career">
									
						<textarea name="comment" cols="40" rows="3" placeholder="Комментарии"></textarea>		
						<input type="submit" value="Отправить" class="submit">
					</form>
				</div>
				
			</div>
		</div>
	
<?php include('footer.php'); ?>	