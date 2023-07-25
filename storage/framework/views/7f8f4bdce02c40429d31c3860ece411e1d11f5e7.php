<?php
    $terms_ids = $row->terms->pluck('term_id');
    $attributes = \Modules\Core\Models\Terms::getTermsById($terms_ids);
?>
<?php /**PATH D:\new_roamio\roamio_deals_web\themes/BC/Hotel/Views/frontend/layouts/details/hotel-attributes.blade.php ENDPATH**/ ?>