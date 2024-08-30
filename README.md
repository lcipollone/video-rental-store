# Customer Statement for a Video Rental Store - Solution Implementation

## Assumptions

- Implementing a storage layer was not deemed necessary for the solution.
- Test cases were not considered for implementation.
- Infrastructure considerations were not taken into account.
- UX/UI was not considered.
- **The focus was purely on Object-Oriented Programming (OOP).**

## Technical Justification

**Encapsulation of Movie Classification**
  - **Issue:** In the original system, we used numeric codes to represent movie classifications (REGULAR, NEW_RELEASE, and CHILDRENS), leading me to modify multiple parts of the code for classification-related changes.
  - **Solution:** I introduced the Classification class, which abstracts movie classification and provides a common interface to obtain pricing strategy and frequent renter points. Each classification (Regular, NewRelease, Childrens) is represented by a concrete class that extends Classification, allowing the encapsulation of the specific logic of each classification type, in line with the Single Responsibility Principle (SRP).
  
**Use of Design Patterns**
  - **Strategy Pattern:** I applied the Strategy design pattern to encapsulate pricing and frequent renter points calculation algorithms, following the Liskov Substitution Principle (LSP) by allowing strategies to be interchangeable. This improves the system's flexibility and avoids violation of the Dependency Inversion Principle (DIP).
  - **Template Method Pattern (StatementFormat):** To generate statements in different formats (text and HTML), we used the Template Method pattern. The abstract class StatementFormat defines a skeleton algorithm for generating statements, with abstract methods that concrete subclasses implement according to the required format, following the LSP.

**Abstraction and Encapsulation of Business Logic**
  - **Issue:** Pricing and frequent renter points calculation logic was scattered throughout the code, making it difficult to understand and maintain the system.
  - **Solution:** I encapsulated the logic of pricing and frequent renter points calculation within the classification classes (Classification), centralizing and simplifying its implementation. This improves the cohesion and coupling of the system, facilitating its maintenance and extension, in line with the SRP and the Interface Segregation Principle (ISP).

**File Organization**
  - **Issue:**  It arose as a result of modifying the solution, prompting the need for better organization.
  - **Solution:** I reorganized the files into a coherent and modular structure, grouping related files by functionality. This improves the readability and maintainability of the code, making it easier to understand and navigate, following the ISP.

## Conclusions
The refactoring of the video rental system has significantly improved its flexibility, maintainability, and extensibility, following SOLID principles. The application of OOP principles and the use of appropriate design patterns have allowed encapsulation of business logic, reduction of code duplication, and improvement of code organization and clarity. These enhancements provide a solid foundation for future system expansions and improvements, maintaining its coherence and ease of maintenance.


## Author

 > [Leandro Cipollone](leandrocipollone@gmail.com) (Mar, 2024)