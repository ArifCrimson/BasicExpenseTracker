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

9/4/2025 9:25 PM
1. public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereMonth('created_at', Carbon::now()->month)->whereYear('created_at', Carbon::now()->year);
    }
Inside ExpenseResource.php

13/4/2025 10:30 AM
1. Added Report function.
2. Make it so the report tab show monthly expenses and there 2 button to either show the whole expenses or print pdf.
3. Created ReportController.php and added 2 line of code for routing for this process.
4. In Report.php add 2 function for table and and sort which is getNavigationSort for putting the tab under Expense tab.
5. created 2 views file inside report folder, show-report.blade.php and pdf.blade.php.
