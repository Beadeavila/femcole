# ![logoFemCole](https://user-images.githubusercontent.com/98114939/217543869-b37d30ae-92ac-406c-9f04-a1b94f3c198d.png)

With this innovative pedagogical application, school teachers can create students and give them marks for each of their trimesters!

In addition, students can consult their grades and get information about their average so that they can get their elbows in more or less 
***

## Table of contents
* [Team Members](#team-members)
* [Screenshots](#screenshots)
* [Technologies](#stacks)
* [Installation](#how-to-install-this-project)
* [Tests](#tests)
* [Methodology](#methodology)
* [Next Steps](#next-steps)

***

## Team Members

| Name | Role | <img src="https://github.com/Yelose/Yelose/blob/main/img/github.png" width="30px" height="30px"> |
| :--- | :---: | :---: |
| Paloma Babot |  Scrum Master | https://github.com/Uxoa |
| Adriana Aguilar |  Product Owner | https://github.com/adrianaguilaruiz |
| Ana Rueda | Developer | https://github.com/anaruedaguiu |
| Beatriz de Ávila | Developer | https://github.com/Beadeavila |
| Esther de Luque | Developer | https://github.com/EstherAma |
| Paula Ramírez | Developer| https://github.com/pagudelo884 |

***

## Screenshots

<h3 align="center">Sketchs views teacher</h3>
<p align="center"> 
    <img src="https://user-images.githubusercontent.com/98114939/217632256-e1b735ec-3d83-4c71-86c7-52eb53c6bb73.png" alt="Sketch Login View Desktop Teacher" width="200px">
    <img src="https://user-images.githubusercontent.com/98114939/217632093-c914833c-e5b9-491d-b155-a48b82ff4bb2.png" alt="Sketch Homepage View Desktop Teacher" width="200px">
</p>

<h3 align="center">Sketchs views student</h3>
<p align="center"> 
    <img src="https://user-images.githubusercontent.com/98114939/217632154-1fef6e87-c225-469c-8213-d1b4aecb8aa5.png" alt="Sketch Login View Mobile Student" width="50px">
    <img src="https://user-images.githubusercontent.com/98114939/217632345-8b13038e-8d91-4f93-b156-076f2d73b92b.png" alt="Sketch Show View Desktop Student" width="200px">
    <img src="https://user-images.githubusercontent.com/98114939/217632408-ef9a9d49-481a-4828-b7de-0db234e27039.png" alt="Sketch Show View Mobile Student" width="50px">
</p>

<h3 align="center">Mockups views teacher</h3>
<p align="center"> 
    <img src="https://user-images.githubusercontent.com/98114939/217637218-0df9d931-95e5-4edc-b3b7-a561d4a20158.png" alt="Mockup Login View Desktop Teacher" width="200px">
    <img src="https://user-images.githubusercontent.com/98114939/217638588-4f64088b-63be-4575-8548-e540f1d34f50.png" alt="Mockup Login View Desktop Teacher" width="200px">
    <img src="https://user-images.githubusercontent.com/98114939/217637211-a70ce3a5-aaab-4df7-8e4c-05f5e5a3e28d.png" alt="Mockup Register Student View Desktop Teacher" width="200px">
    <img src="https://user-images.githubusercontent.com/98114939/217637213-12b398d8-9dd1-4f84-8da7-b0cd6476e521.png" alt="Mockup Edit View Desktop Teacher" width="200px">
    <img src="https://user-images.githubusercontent.com/98114939/217637220-ff6719e7-b1dc-403d-8f2c-1aa39930de88.png" alt="Mockup Show View Desktop Teacher" width="200px">
</p>

<h3 align="center">Mockups views student</h3>
<p align="center"> 
    <img src="https://user-images.githubusercontent.com/98114939/217639169-1509eb6b-8789-4b5a-ae25-07f874117693.png" alt="Mockup Show View Mobile Student" width="50px">
    <img src="https://user-images.githubusercontent.com/98114939/217639210-16d84fe8-1e43-4d9b-bd51-41a3ab13a23b.png" alt="Mockup Show View Mobile Student" width="50px">
</p>

***


## Stacks

- HTML 5
- CSS 3
- BootStrap 5
- PHP 8.1.10
- Laravel Framework 9.44.0
- MySQL
- DrawSQL
***

## How to install this project

You will need a text editor and perform the following steps:

1. Clone the project
```bash
  git clone https://github.com/Uxoa/femcole
```

2. Go to the project directory
```bash
  cd femcole
```

3. Start MySQL service and create a MySQL database named "femcoledb"

4. Create in the text editor an .env file by copying the contents of .env.example and modify the database name (laravel by femcoledb)

5. Install dependencies
```bash
  npm install
```
```bash
  composer install
```

6. Activate the server and keep this terminal open
```bash
  npm run dev
```

7. Run the PHP server and keep this terminal open
```bash
  php artisan serve
```

8. Migrate database
```bash
  php artisan migrate:fresh --seed
```

***

## Tests
To run the tests, execute the following command(s)
```bash
  php artisan test
```
<img width="393" alt="test_artisan_mvp" src="https://user-images.githubusercontent.com/98114939/217561019-46b00e8c-8c80-485f-99e9-6fe09010162e.png">

```bash
  vendor/bin/phpunit tests
```

<img width="449" alt="test_vendor_mvp" src="https://user-images.githubusercontent.com/98114939/217561187-eb99f8d3-c9df-4da9-8167-0efd9e556139.png">

***


## Methodology
- TDD
- Agile with Scrum
- Mob and pair programming
***

## Next Steps

- Completing the CRUD of the grades
- Add functionalities (quarter end, calculation of average grades, ...)
- Profiling the design with CSS
- Configure all the views
- Add Drag and Drop for student photos
