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
            <p>/api/search/attractions</p>
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

          <h2 class="font-weight-bold">Register</h2>
          <p>Register user</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/auth/register</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">POST</p>
            <li class="font-weight-bold">
              Body:
            </li>
            <ul>
              <li>
                JSON: <code style="color: salmon">{ "name" : string, "email": string, "password": string, "password_confirmation": string }</code>
              </li>
            </ul>
          </ul>

          <h2 class="font-weight-bold">Resend Verification Email</h2>
          <p>Resend verification email</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/auth/register/resend</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
            <li class="font-weight-bold">
              Body:
            </li>
            <ul>
              <li>
                JSON: <code style="color: salmon">{ "email": string }</code>
              </li>
            </ul>
          </ul>

          <h2 class="font-weight-bold">Login</h2>
          <p>Login user</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/auth/login</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">POST</p>
            <li class="font-weight-bold">
              Body:
            </li>
            <p>remember_me is optional</p>
            <ul>
              <li>
                JSON: <code style="color: salmon">{ "email": string, "password": string, "remember_me": boolean }</code>
              </li>
            </ul>
          </ul>

          <h2 class="font-weight-bold">Get detail user</h2>
          <p>Get detail user user</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/auth/user</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
            <li class="font-weight-bold">
              Header:
            </li>
            <ul>
              <li>
                JSON: <code style="color: salmon">{ "Authorization": "Bearer {access_token}"}</code>
              </li>
            </ul>
          </ul>

          <h2 class="font-weight-bold">Logout</h2>
          <p>Logout user</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/auth/logout</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
            <li class="font-weight-bold">
              Header:
            </li>
            <ul>
              <li>
                JSON: <code style="color: salmon">{ "Authorization": "Bearer {access_token}"}</code>
              </li>
            </ul>
          </ul>
          </ul>

          <h2 class="font-weight-bold">Request for Forgot Password</h2>
          <p>Send reset link to email user</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/password/create</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">POST</p>
            <li class="font-weight-bold">
              Body:
            </li>
            <ul>
              <li>
                JSON: <code style="color: salmon">{ "email": string }</code>
              </li>
            </ul>
          </ul>

          <h2 class="font-weight-bold">Auth for Forgot Password</h2>
          <p>Send reset link to email user</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/password/find/{token}</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
          </ul>

          <h2 class="font-weight-bold">Reset Password</h2>
          <p>Send reset link to email user</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/password/reset</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">POST</p>
            <li class="font-weight-bold">
              Body:
            </li>
            <ul>
              <li>
                JSON: <code style="color: salmon">{ "email": string, "password": string, "token": string }</code>
              </li>
            </ul>
          </ul>

          <h2 class="font-weight-bold">Update User</h2>
          <p>Update user.</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/users/update</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">PUT</p>
            <li class="font-weight-bold">
              Header:
            </li>
            <ul>
                JSON: <code style="color: salmon">{ "Authorization": "Bearer {access_token}"}</code>
            </ul>
            <li class="font-weight-bold">
              Body:
            </li>
            <p>All of Parameters are optional</p>
            <ul>
              <li>
                JSON: <code style="color: salmon">{ "name": string, "email": string, "password": string, "password_confirmation": string, "image": image }</code>
              </li>
            </ul>
          </ul>

          <h2 class="font-weight-bold">Add a Review</h2>
          <p>Add a review.</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/reviews</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">POST</p>
            <li class="font-weight-bold">
              Header:
            </li>
            <ul>
                JSON: <code style="color: salmon">{ "Authorization": "Bearer {access_token}"}</code>
            </ul>
            <li class="font-weight-bold">
              Body:
            </li>
            <ul>
              <li>
                JSON: <code style="color: salmon">{ "review": string, "rating": integer, "attraction_id": string }</code>
              </li>
            </ul>
          </ul>

          <h2 class="font-weight-bold">Get url for RedirectToProvider</h2>
          <p>Get url for RedirectToProvider.</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/auth/{provider}/redirect</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
          </ul>

          <h2 class="font-weight-bold">Get Detail User from Provider</h2>
          <p>Get detail user from provider.</p>
          <ul class="mb-5">
            <li class="font-weight-bold">
              URL
            </li>
            <p>/api/auth/{provider}/callback?code={code}</p>
            <li class="font-weight-bold">
              Method:
            </li>
            <p style="color: salmon">GET</p>
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
