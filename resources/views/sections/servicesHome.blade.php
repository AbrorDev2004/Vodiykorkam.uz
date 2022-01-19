<section class="service-section section-2 bg-grey padding">
	<div class="dots"></div>
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6 sm-padding">
				<div class="service-content wow fadeInLeft"> <span>Explore The Features</span>
					<h2>Eng to'liq integratsiyalashgan paketni taklif etamiz!</h2>
					<p>Biz ajoyib tajriba, muvozanatli munosabatlar va jamiyat uchun yaratilgan muhit yaratadigan hamkorlik ruhini rivojlantirish orqali barqaror kelajakni qurish tarafdorimiz. Qurilish shunchaki ish emas. Bu bizning ishtiyoqimiz. Biz amalga oshirgan har bir loyiha bilan biz barni yuqori darajaga qo'yamiz va eng yaxshi sanoatni ta'minlaymiz.</p>
					<p>Qurilish shunchaki ish emas. Bu bizning ishtiyoqimiz. Biz amalga oshirgan har bir loyiha bilan biz barni yuqori darajaga qo'yamiz va eng yaxshi sanoatni ta'minlaymiz.</p> 
					<a href="/services" class="default-btn">Barcha xizmatlar</a> </div>
			</div>
			<div class="col-lg-6 sm-padding">
				<div class="row services-list">
					<div class="col-md-6 padding-15">
						<div class="service-item box-shadow wow fadeInUp" data-wow-delay="100ms"> 
							{!! $services[0]->icon !!}
							<h3>{{ $services[0]->name }}</h3>
							<p>{{ $services[0]->description }}</p>
						</div>
					</div>
					<div class="col-md-6 padding-15 offset-top">
						<div class="service-item box-shadow wow fadeInUp" data-wow-delay="300ms">
							{!! $services[1]->icon !!}
							<h3>{{ $services[1]->name }}</h3>
							<p>{{ $services[1]->description }}</p>
						</div>
					</div>
					<div class="col-md-6 padding-15">
						<div class="service-item box-shadow wow fadeInUp" data-wow-delay="400ms">
							{!! $services[2]->icon !!}
							<h3>{{ $services[2]->name }}</h3>
							<p>{{ $services[2]->description }}</p>
						</div>
					</div>
					<div class="col-md-6 padding-15 offset-top">
						<div class="service-item box-shadow wow fadeInUp" data-wow-delay="500ms">
							{!! $services[3]->icon !!}
							<h3>{{ $services[3]->name }}</h3>
							<p>{{ $services[3]->description }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
