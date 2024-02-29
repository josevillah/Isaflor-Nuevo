// Este archivo es exclusivamente para validación de formularios
// en el lado del cliente.

export class Validation {

    specialCaracter(element) {
        const expresionRegular = /[!@#$%^&*()_+\[\]{};':"\\|,<>\/?]+/;
        return expresionRegular.test(element);
    }

}