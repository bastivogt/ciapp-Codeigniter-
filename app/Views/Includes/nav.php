<?php helper('form'); ?>
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <?php if(!session()->has('user_id')): ?>
            <li><a href="/auth/login">Login</a></li>
        <?php endif; ?>
        <?php if(session()->has('user_id')): ?>
            <li>Hello, <?php echo session('username'); ?>!</li>
            <li>
                <?php echo form_open('/auth/logout'); ?>
                    <button type="submit">Logout</button>
                <?php echo form_close(); ?>
            </li>
        <?php endif; ?>
    </ul>
</nav>