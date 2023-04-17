 <!-- ===================================   Modal add meals ==============================-->



 <div class="modal fade" id="addmeal" tabindex="-1" aria-labelledby="addPostModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addPostModalLabel">Add Meal</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="addmeal" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="mb-3">
                         <label for="body" class="form-label">Title</label>
                         <input name="name" type="text" class="form-control" id="body" required>
                     </div>
                     <div class="mb-3">
                         <label for="body" class="form-label">Description</label>
                         <textarea class="form-control" id="body" name="description" required></textarea>
                     </div>
                     <div class="mb-3">
                         <label class="form-label">Image</label>
                         <input name="image" type="file" class="form-control" id="title" required>
                     </div>
                     <div class="mb-3">
                         <label for="body" class="form-label">Price</label>
                         <input name="price" type="number" class="form-control" id="body" required>
                     </div>
                     <div class="mb-3">
                         <label for="body" class="form-label">Categories</label>
                         <ul>
                             @foreach($catmeals as $catmeal)
                             <li>
                                 <input type="radio" id="checkbox-1" name="category" value="{{$catmeal->name}}">
                                 <label>{{$catmeal->name}}</label>
                             </li>
                             @endforeach
                         </ul>
                     </div>



             </div>
             <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Save</button>
             </div>
             </form>
         </div>
     </div>
 </div>





 <!-- ====================================== Offers add Modal================================  -->


 <div class="modal fade" id="addoffer" tabindex="-1" aria-labelledby="addPostModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addPostModalLabel">Add Offer</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="addoffer" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="mb-3">
                         <label for="body" class="form-label">Title</label>
                         <input name="name" type="text" class="form-control" id="body" required>
                     </div>
                     <div class="mb-3">
                         <label for="body" class="form-label">Description</label>
                         <textarea class="form-control" id="body" name="description" required></textarea>
                     </div>
                     <div class="mb-3">
                         <label for="body" class="form-label">Price</label>
                         <input name="price" type="number" class="form-control" id="body" required>
                     </div>
                     <div class="mb-3">
                         <label for="body" class="form-label">Duration</label>
                         <select id="type_input" name="duration" class="options">
                             <option selected>
                             </option>
                             <option value="Monthly">Month</option>
                             <option value="Yearly">Year</option>
                         </select>
                     </div>
                     <div class="mb-3">
                         <label for="body" class="form-label">Categories</label>
                         <ul>
                             @foreach($catoffers as $catoffer)
                             <li>
                                 <input type="radio" id="checkbox-1" name="category" value="{{$catoffer->name}}"
                                     checked>
                                 <label>{{$catoffer->name}}</label>
                             </li>
                             @endforeach
                         </ul>
                     </div>



             </div>
             <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Save</button>
             </div>
             </form>
         </div>
     </div>
 </div>
 <section>
     <!-- ===================================   Modal add categoris of offers ==============================-->

     <div class="modal fade" id="addcatoffer" tabindex="-1" aria-labelledby="addPostModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="addPostModalLabel">Add Categories Of Offers</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form action="addcatoffer" method="post" enctype="multipart/form-data">
                         @csrf
                         <div class="mb-3">
                             <label for="body" class="form-label">Name of Category</label>
                             <input name="name" type="text" class="form-control" id="body" required>
                         </div>
                         <div class="modal-footer">
                             <button type="submit" class="btn btn-primary">Save</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
 </section>


 <!-- ===================================   Modal add categoris of meals ==============================-->


 <div class="modal fade" id="addcatmeal" tabindex="-1" aria-labelledby="addPostModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addPostModalLabel">Add Categoris Of Meals</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="addcatmeal" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="mb-3">
                         <label for="body" class="form-label">Name of Category</label>
                         <input name="name" type="text" class="form-control" id="body" required>
                     </div>
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary">Save</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>