<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Oxcode Endpoint</title>
  </head>
  <body>
    <div class="container mt-2">
      <div class="row">
        <div class="col">
          <h2 class="font-weight-bold">Get List of Attractions</h2>
          <p>Get all attractions.</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/attractions</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
          </ul>

          <h2 class="font-weight-bold">Detail Attraction by id</h2>
          <p>Detail attraction by id.</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/attractions/{id}</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
          </ul>

          <h2 class="font-weight-bold">Get Image by id</h2>
          <p>Get a image by id</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/images/{id}</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
          </ul>

          <h2 class="font-weight-bold">Get Popular Attractions</h2>
          <p>Get popular attractions</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/popular/attractions</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
          </ul>

          <h2 class="font-weight-bold">Get Popular Cities</h2>
          <p>Get popular cities</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/popular/cities</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
          </ul>

          <h2 class="font-weight-bold">Get Popular Categories</h2>
          <p>Get popular categories</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/popular/categories</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
          </ul>
          
          
          <h2 class="font-weight-bold">Get List of Categories</h2>
          <p>Get list categories</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/categories</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
          </ul>

          <h2 class="font-weight-bold">Search Attractions</h2>
          <p>Get list attractions by multiple filters</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/attracions/search</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">POST</p>
            <li class="font-weight-bold">
              Body:
            </li>
            <p>Choices of Sort by: 'distance', 'alphabet', and 'reviews'.</p>
            <ul>
              <li>
                JSON: <code style="color: salmon">{ "name" : string, "city": string, "hours_of_operation": { from: "00:00", to: "00:00" }, "categories": array, "sort_by": string }</code>
              </li>
            </ul>
          </ul>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>