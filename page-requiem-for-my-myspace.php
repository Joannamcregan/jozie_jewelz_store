<?php get_header('myspace');
$birth_date = '1991-04-11';
$current_date = date('Y-m-d');
$birth_date_obj = new DateTime($birth_date);
$current_date_obj = new DateTime($current_date);
$diff = $current_date_obj->diff($birth_date_obj);
$age_years = $diff->y;

?><main id="myspace-main">
    <div id="basic-info">
        <h1>Jozie Jewelz</h1>
        <img src="<?php echo get_theme_file_uri('/img/myspace_2026.jpg'); ?>" alt="a kind-of young white woman with wavy reddish brown hair and glasses smiles while looking up at the camera" />
        <p>pronouns: she/her</p>
        <p><?php echo 'age: ' . $age_years; ?></p>
        <p>location: Ohio</p>
    </div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/D1nh3bGrgHM?si=fS-lTLULtDtf3UtR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</main>