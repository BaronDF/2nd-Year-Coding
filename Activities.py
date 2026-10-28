def save_student_details (first_name, last_name):
    with open("C:\\Users\\Administrator\\Desktop\\Student_Details.txt", 'a') as file:
        file.write(f"First Name: {first_name}, Last Name: {last_name}\n")

while True:
    first_name = input("Enter the student's first name: ")
    last_name = input("Enter the student's last name: ")

    save_student_details(first_name, last_name)

    choice = input("Do you want to add another student? (yes/no): ").lower()
    if choice != 'yes':
        print("Student details saved.")
        break