// Admin panel

$fonts = document.getElementById('fonts')
$font_pairs = document.getElementById('font_pairs')
$users = document.getElementById('users')

$fonts_table = document.getElementById('fonts_table')
$fonts_pairs_table = document.getElementById('fonts_pairs_table')
$users_table = document.getElementById('users_table')

$fonts.addEventListener('click', function () {

    $fonts_table.style.display = 'block';
    $fonts_pairs_table.style.display = 'none';
    $users_table.style.display = 'none';

})

$font_pairs.addEventListener('click', function () {

    $fonts_table.style.display = 'none';
    $fonts_pairs_table.style.display = 'block';
    $users_table.style.display = 'none';

})

$users.addEventListener('click', function () {

    $fonts_table.style.display = 'none';
    $fonts_pairs_table.style.display = 'none';
    $users_table.style.display = 'block';

})

$('.mf_fm_bs_b input[type=file]').on('change', function () {
    let file = this.files[0];
    $(this).closest('.mf_fm_bs_b').find('.input-file-text').html(file.name);
});

// Filter

$filter_btn = document.getElementById('filter_btn')
$filter_search = document.getElementById('filter_search')

$styles_btn = document.getElementById('styles')
$languages_btn = document.getElementById('languages')

$styles_selector = document.getElementsByClassName('filter_categories_selector')

$filter_btn.addEventListener('click', function () {
    $filter_search.style.display = 'block';
})

$styles_btn.addEventListener('click', function () {
    $styles_selector.style.display = 'block';
})

// Checkbox select

var expanded = false;

function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if (!expanded) {
        checkboxes.style.display = "block";
        expanded = true;
    } else {
        checkboxes.style.display = "none";
        expanded = false;
    }
}
