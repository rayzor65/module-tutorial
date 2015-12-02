## Write a reusable module

This is an example and mini tutorial on how to create a module that you can pull in with composer.
It would be a good idea to have a basic understanding of autoloading and namespaces prior to creating your module.

### Writing the module

* Copy this project into a new directory
* Edit the composer.json with the details of your module
* The autoload field means all the classes will be included under the specified namespace.
* Tag your module

    git tag 1.0.1
    git push origin --tags

### Including the module

Update your project's composer file.

Specify where the repo is

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/rayzor65/module-tutorial" // Change this to your module
        }
    ]

Then add to require

        "require": {
            "rayzor65/module-tutorial": "1.0.1" // Change this to your module
        }

Now you may you the class in your project like so

    use ModuleTutorial\MyModule\MyService;

    class ProjectClass
    {
        public function ProjectClassFunction()
        {
            // You can now use your autoloaded classes from the module
            $service = new MyService();
            $service->doSomething();
        }
    }

### Final steps

* Make sure you have put your own README instructions