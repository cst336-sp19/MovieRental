<!DOCTYPE html>
<html>
    <head>
        <?php include "parts/head.php" ?>
        <title>Search Movies | <?=$site["title"]?></title>
        <script>
            /* global $ */
            $(function() {
                $("#search-prompt").removeClass("d-none");
                
                $("#btn-search").on("click", function(e) {
                    e.preventDefault();
                    searchMovies();
                });
            });
        </script>
    </head>
    <body>
        <?php include "parts/nav.php" ?>
        
        <main class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    
                    <h2 class="mt-4">Search All Movies</h2>
                    <form class="input-group mb-3">
                        <input id="input-search" type="text" name="phrase" class="form-control" placeholder="Search all movies...">
                        <div class="input-group-append">
                            <button id="btn-search" class="btn btn-theme" type="submit">Search</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="row">
                
                        <div class="col-12 col-lg-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="filter-price">Price</label>
                                </div>
                                <select class="custom-select" id="filter-price">
                                    <option selected disabled>Choose...</option>
                                    <option value="0">Low to High</option>
                                    <option value="1">High to Low</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-8">
                            <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                                <?php 
                                    for ($i = 1; $i <=5; $i++) {
                                        echo "<label class='btn btn-outline-theme'>
                                                <input type='radio' name='filter-stars' value='$i' checked>$i <i class='fas fa-star ml-1'></i>
                                            </label>";
                                    }
                                ?>
                            </div>
                        </div>
            
                    </div>
                </div>
            </div>
            
            <div id="search-results" class="row mt-4"></div>
            
            <div id="search-prompt" class="row align-items-center d-none">
                <div class="col-12 text-center">
                    <h2 class="mb-1">Start Searching</h2>
                    <p class="text-muted">Search for your favorite movie by name, description, price or rating.</p>
                </div>
            </div>
            
            <div id="no-results" class="row align-items-center d-none">
                <div class="col-12 text-center">
                    <h2 class="mb-1">No Results</h2>
                    <p class="text-muted">Didn't find what you were looking for? Try adjusting your search query.</p>
                </div>
            </div>
            
        </main>
        
        <?php include "parts/footer.php" ?>
    </body>
</html>