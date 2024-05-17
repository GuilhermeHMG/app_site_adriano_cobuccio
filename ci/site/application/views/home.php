<?php $this->load->view('header', ['title' => 'Home']); ?>

<h2>Bem-vindo ao Meu Projeto CodeIgniter</h2>
<p>Esta é a página inicial.</p>

<div>
    <section>
        <div>
            <h3>Clientes satisfeitos</h3>
            <ul>
                <li><a href="">Nome da Empresa 1</a></li>
                <li><a href="">Nome da Empresa 2</a></li>
                <li><a href="">Nome da Empresa 3</a></li>
                <li><a href="">Nome da Empresa 4</a></li>
                <li><a href="">Nome da Empresa 5</a></li>
            </ul>
            <a href="" class="botao">Ver todos &raquo;</a>
        </div>
    </section>
</div>
<div>
    <?php $this->load->view('noticias'); ?>
</div>

<?php $this->load->view('footer'); ?>
