<form method="post" name="redirect" action="https://test.ccavenue.ae/transaction/transaction.do?command=initiateTransaction">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="encRequest" value="<?php echo e($encryptedData); ?>">
    <input type="hidden" name="access_code" value="<?php echo e($accessCode); ?>">
    <input type="hidden" name="enc_key" value="<?php echo e($enc_key); ?>">

    
</form>

<script>
    document.redirect.submit();
</script>
<?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Flight/Views/frontend/redirect.blade.php ENDPATH**/ ?>