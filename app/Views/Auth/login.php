<?php $this->extend('layouts/default'); ?>
<?php helper('form'); ?>
<?php $this->section('content'); ?>

<h1>Login</h1>
<?php if(session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php echo form_open('auth/login'); ?>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo old('email', ''); ?>" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button type="submit">Login</button>
<?php echo form_close(); ?>


<?php $this->endSection(); ?>