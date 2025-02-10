<!-- CATEGORY MODALS -->

<!-- FOOD LISTS MODALS -->

 <!-- Add Recipe Modal -->
<div class="modal fade mt-5" id="addRecipeModal" tabindex="-1" aria-labelledby="addRecipe" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRecipe"><strong>Add Recipe</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="recipeID" action="endpoint/add-recipe.php" method="POST" enctype="multipart/form-data">
                    <input type="text" class="form-control" id="table" name="table" value="tbl_recipe" hidden>
                    <div class="mb-3" hidden>
                        <label for="recipeID" class="form-label">Recipe ID</label>
                        <input type="text" class="form-control" id="recipeID" name="tbl_recipe_id">
                    </div>
                    <div class="mb-3">
                        <label for="recipeImage" class="form-label">Recipe Image</label>
                        <input type="file" class="form-control" id="recipeImage" name="recipe_image" style="border:none;">
                    </div>
                    <div class="mb-3">
                        <label for="recipeName" class="form-label">Recipe Name</label>
                        <input type="text" class="form-control" id="recipeName" name="recipe_name">
                    </div>
                    <div class="mb-3">
                        <label for="recipeCategory" class="form-label">Category</label>

                        <?php 
                        
                            $stmt = $conn->prepare("SELECT * FROM `tbl_category`");
                            $stmt->execute();

                            $recipe_category = $stmt->fetchAll();

                        ?>

                        <select class="form-control" name="tbl_category_id" id="recipeCategory">

                            <option value="">- select -</option>
                            
                            <?php foreach ($recipe_category as $category) {
                                ?>
                                
                                <option value="<?php echo $category['tbl_category_id']; ?>"><?php echo $category['category_name'] ?></option>
                                
                                <?php    
                            }?>

                        </select>

                    </div>
                    <div>
                        <label for="recipeIngredients" class="form-label">Ingredients</label>
                        <textarea class="form-control" name="recipe_ingredients" id="recipeIngredients" rows="5"></textarea>
                    </div>
                    <div>
                        <label for="recipeProcedure" class="form-label">Procedure</label>
                        <textarea class="form-control" name="recipe_procedure" id="recipeProcedure" rows="5"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- View Recipe Modal -->
<div class="modal fade mt-5" id="viewRecipeModal" tabindex="-1" aria-labelledby="viewRecipe" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="viewRecipe"><strong>My Recipe</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

        <div class="card">
            <div class="d-flex justify-content-center align-items-center">
                <img src="" id="viewRecipeImage" class="card-img-top mt-2" alt="Recipe" style="max-width: 300px">
            </div>
            <div class="card-body text-center">
                <h6 class="card-title"><strong id="viewRecipeName"></strong></h6>
                <p class="text-muted">Category: <span class="card-subtitle text-muted" id="viewCategoryName"></span></p>
            </div>
            <div class="row text-center mb-5 p-3">
                <div class="col">
                    <h5><strong>Ingredients:</strong></h5>
                    <p id="viewRecipeIngredients"></p>
                </div>
                <div class="col">
                    <h5><strong>Procedure:</strong></h5>
                    <p id="viewRecipeProcedure"></p>
                </div>
            </div>
        </div>

        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Update Recipe Modal -->
<div class="modal fade mt-5" id="updateRecipeModal" tabindex="-1" aria-labelledby="updateRecipe" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateRecipe"><strong>Update Recipe</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="recipeID" action="endpoint/update-recipe.php" method="POST" enctype="multipart/form-data">
                    <input type="text" class="form-control" id="updateTable" name="table" value="tbl_recipe" hidden>
                    <div class="mb-3" hidden>
                        <label for="updateRecipeID" class="form-label">Recipe ID</label>
                        <input type="text" class="form-control" id="updateRecipeID" name="tbl_recipe_id">
                    </div>
                    <div class="mb-3">
                        <label for="updateRecipeImage" class="form-label">Recipe Image</label>
                        <input type="file" class="form-control" id="updateRecipeImage" name="recipe_image" style="border:none;">
                    </div>
                    <div class="mb-3">
                        <label for="updateRecipeName" class="form-label">Recipe Name</label>
                        <input type="text" class="form-control" id="updateRecipeName" name="recipe_name">
                    </div>
                    <div class="mb-3">
                        <label for="updateRecipeCategory" class="form-label">Category</label>

                        <?php 
                        
                            $stmt = $conn->prepare("SELECT * FROM `tbl_category`");
                            $stmt->execute();

                            $recipe_category = $stmt->fetchAll();

                        ?>

                        <select class="form-control" name="tbl_category_id" id="updateRecipeCategory">

                            <option value="">- select -</option>
                            
                            <?php foreach ($recipe_category as $category) {
                                ?>
                                
                                <option value="<?php echo $category['tbl_category_id']; ?>"><?php echo $category['category_name'] ?></option>
                                
                                <?php    
                            }?>

                        </select>

                    </div>
                    <div>
                        <label for="updateRecipeIngredients" class="form-label">Ingredients</label>
                        <textarea class="form-control" name="recipe_ingredients" id="updateRecipeIngredients" rows="5"></textarea>
                    </div>
                    <div>
                        <label for="updateRecipeProcedure" class="form-label">Procedure</label>
                        <textarea class="form-control" name="recipe_procedure" id="updateRecipeProcedure" rows="5"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

