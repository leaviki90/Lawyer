<?PHP 
$contactAddress = get_option("lawyer_address");
$contactPhone = get_option("lawyer_phone");
$contactEmail = get_option("lawyer_email");

?>

<!-- Info-section starts here -->
<section class="info-section bg-info text-center">
    <div class="container">
        <h2 class="section-title text-primary">Lawyer- Attorneys at Law</h2>
<div class="info-group">
    <p class="d-flex align-items-center justify-content-center">
        <span class="fas fa-map-marker-alt me-2"></span>
        <a href="https://www.google.com/maps/place/<?php echo $contactAddress; ?>" target="_blank">
           <?php echo $contactAddress; ?>
        </a>
    </p>
    <p class="d-flex align-items-center justify-content-center">
        <span class="fas fa-phone-alt me-2"></span>
        <a href="tel:<?php echo $contactPhone; ?>">
           <?php echo $contactPhone; ?>
        </a>
    </p>
    <p class="d-flex align-items-center justify-content-center">
        <span class="far fa-envelope me-2"></span>
        <a href="mailto:<?php echo $contactEmail; ?>"><?php echo $contactEmail; ?></a>
    </p>          
</div> <!-- Info-group ends here -->
</div> <!-- Info-group ends here -->
    </div> <!-- Container ends -->
</section> <!-- Info-section ends -->

