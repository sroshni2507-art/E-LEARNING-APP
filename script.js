// ================= REGISTER VALIDATION =================

function validateRegister() {

    let name =
        document.getElementById("regName").value.trim();

    let email =
        document.getElementById("regEmail").value.trim();

    let password =
        document.getElementById("regPass").value;


    if (name === "") {

        alert("Please enter your name.");

        return false;

    }


    if (email === "") {

        alert("Please enter your email.");

        return false;

    }


    if (password.length < 6) {

        alert(
            "Password must contain at least 6 characters."
        );

        return false;

    }


    return true;
}


// ================= LOGIN VALIDATION =================

function validateLogin() {

    let email =
        document.getElementById("logEmail").value.trim();

    let password =
        document.getElementById("logPass").value;


    if (email === "") {

        alert("Please enter your email.");

        return false;

    }


    if (password === "") {

        alert("Please enter your password.");

        return false;

    }


    return true;
}


// ================= API / STUDENT DATA =================

function fetchApiData() {

    fetch("backend/get_students.php")
        .then(response => response.json())
        .then(data => {

            let output = "";

            if (data.length === 0) {
                output = "<p>No students registered yet.</p>";
            } else {

                data.forEach((student, index) => {

                    output += `
                        <div class="student-card">
                            <h3>Student ${index + 1}</h3>
                            <p>Name: ${student.name}</p>
                            <p>Email: ${student.email}</p>
                        </div>
                    `;

                });
            }

            document.getElementById("api-content").innerHTML = output;
        })
        .catch(error => {
            console.log(error);

            document.getElementById("api-content").innerHTML =
                "<p>Unable to fetch student data.</p>";
        });
}


// ================= PROFILE =================

function showProfile() {

    alert(
        "Student Profile\n\n" +
        "Your profile information is available in your dashboard."
    );

}


// ================= PROGRESS =================

function showProgress() {

    alert(
        "Learning Progress\n\n" +
        "Course progress tracking will be available here."
    );

}


// ================= START COURSE =================

function startCourse(courseName) {

    alert(
        "You selected: " +
        courseName +
        "\n\nCourse started successfully!"
    );

}