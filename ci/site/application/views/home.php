<?php $this->load->view('header', ['title' => 'Home']); ?>

<div class="home-title">
    <h2>A força de um Grupo que traz credibilidade e segurança.</h2>
    <p>O Grupo Adriano Cobuccio expandiu seus negócios nos últimos anos e se solidificou através da diversidade de suas atividades econômicas. O grande leque de atuação do grupo é uma retaguarda comercial e financeira que amplia ainda mais seu mercado. A estratégia é manter sempre essa diversidade, buscando o máximo de eficiência em cada segmento.</p>
</div>
<div>
    <section>
        <div class="home-carousel">
            <h3>Algumas das empresas do Grupo:</h3>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/agil-banner.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-cobuccio-fidic.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-mineracao-rio-pardo.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-securitizadora.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/cobuccio-tecnologia.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-fidc.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-brasilcard.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-bolt.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-brasilcred.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-usinas.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
    </section>
</div>
<div>
    <?php $this->load->view('politica'); ?>
</div>

<?php $this->load->view('footer'); ?>
