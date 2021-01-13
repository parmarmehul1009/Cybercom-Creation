// Mark Object
const Mark = {
    firstName: 'mark',
    LastName: 'Miller',
    mass: 78,
    height: 1.69,

    // Finction to calculate the BMI
    clacBMI: function() {
        this.BMI = this.mass / (this.height * this.height); // Save the BMI for this Object
        return this.BMI; // Return the BMI
    }
}

// John Object
const john = {
    firstName: 'john',
    LastName: 'smith',
    mass: 92,
    height: 1.95,

    clacBMI: function() {
        this.BMI = this.mass / (this.height * this.height);
        return this.BMI;
    }
}

john.clacBMI();
Mark.clacBMI();


// check wather the Mark BMI is Higher or John BMI
if (Mark.BMI > john.BMI) {
    console.log(`${Mark.firstName} ${Mark.LastName}'s BMI (${Mark.BMI}) is higher then ${john.firstName} ${john.LastName}'s (${john.BMI}) BMI`);
} else if (john.BMI > Mark.BMI) {
    console.log(`${john.firstName} ${john.LastName}'s BMI (${john.BMI}) is higher then ${Mark.firstName} ${Mark.LastName}'s (${Mark.BMI}) BMI`);
} else {
    console.log(`${Mark.firstName} ${Mark.LastName} and ${john.firstName} ${john.LastName} have same BMI`);
}