<?PHP

function lawyer_option_page() {
    add_menu_page(
            "Option Page",
            "Lawyer Options",
            "administrator",
            "option_page",
            "lawyer_contact_data",
            "dashicons-id",
            19);
}

add_action("admin_menu", "lawyer_option_page");

function lawyer_contact_settings() {
    register_setting("lawyer_contact_data", "lawyer_address");
    register_setting("lawyer_contact_data", "lawyer_phone");
    register_setting("lawyer_contact_data", "lawyer_email");
}

add_action("init", "lawyer_contact_settings");

function lawyer_contact_data() {
    ?>
    <h1>Lawyer Contact Data</h1>
    <form method="post" action="options.php">
        <?PHP
        settings_fields("lawyer_contact_data");
        do_settings_sections("lawyer_contact_data");
        ?>
    <table class="form-table">
            <tr>
                <th>Address:</th>
                <td>
                    <input type="text" name="lawyer_address" value="<?PHP
                    echo esc_attr(get_option("lawyer_address"));
                    ?>">
                </td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td>
                    <input type="text" name="lawyer_phone" value="<?PHP
                echo esc_attr(get_option("lawyer_phone"));
                    ?>">
                </td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>
                    <input type="email" name="lawyer_email" value="<?PHP
                echo esc_attr(get_option("lawyer_email"));
                ?>">
                </td>
            </tr>
        </table>
    
    <?PHP submit_button(); ?>
</form>
<?PHP
}
