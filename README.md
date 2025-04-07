# BasicExpenseTracker
This is just basic expense tracker project with Laravel Filament

4/4/2025 11:27 AM
*add functions to User, Expense for Eloquent ORM. 

6/4/2025 Unknown time
1. Done implementing and fixing for create expenses
2. Added mutateFormDataBeforeCreate for user id auth
3. Added  Category data by seeding
4. Added category list/select component inside createExpenses
5. Add the user_id and category_id in fillable in Expense.php Model
6. Just updated databases for category to just have one type of data named "Type"
7. Adjusted forms and tables in ExpenseResources.php

8/4/2025 6:12 AM
1. Do another migrations table again for expenses cause im dumb enough to delete last expenses table but this time remember to add total_price in.
2. Update Expense model
3. Added $data['total_price'] = $data['amount'] * $data['price']; inside mutateFormDataBeforeCreate function
