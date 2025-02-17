$(document).ready(function() {
    // Function to load bikes based on filters and search
    function loadBikes(page) {
        const search = $('#searchInput').val();
        const brand = $('select[name="brand"]').val();
        const location = $('select[name="location"]').val();
        $.ajax({
            url: 'search-pagination.php', // A separate PHP file to handle the search and pagination
            type: 'GET',
            data: {
                page: page,
                search: search,
                brand: brand,
                location: location
            },
            success: function(data) {
                $('#bikeList').html(data); // Update the bike list
            }
        });
    }

    // Live search functionality
    $('#searchInput').on('keyup', function() {
        loadBikes(1); // Load first page with updated search
    });

    // Filter functionality
    $('select[name="brand"], select[name="location"]').on('change', function() {
        loadBikes(1); // Load first page with updated filters
    });

    // Clear filters functionality
    $('#clearFilters').on('click', function() {
        $('#searchInput').val('');
        $('select[name="brand"]').val('');
        $('select[name="location"]').val('');
        loadBikes(1); // Reload bikes on clear
    });

    // Handle pagination
    $(document).on('click', '.page-link', function(e) {
        e.preventDefault();
        const page = $(this).data('page');
        loadBikes(page); // Load bikes for the selected page
    });

    // Initial load
    loadBikes(1); // Load first page on initial load
});