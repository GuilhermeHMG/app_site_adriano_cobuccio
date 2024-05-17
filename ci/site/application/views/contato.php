<?php $this->load->view('header', ['title' => 'Contato']); ?>

<h2>Contato</h2>
<form action="<?php echo base_url('contato/enviar'); ?>" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" required></textarea>
    
    <button type="submit">Enviar</button>
</form>

<?php $this->load->view('footer'); ?>
