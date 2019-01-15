# JSONToPath

**Program that creates directory structure from JSON.** Program has no specific applications. The main reason for its creation is udnerstanding how recursive function works and training writing php scripts. 

Example of delivered JSON file and created structure
```
{
	"path": "C:\\xampp\\htdocs\\Projects\\pathToJSON",
	"type": "dir",
	"components": [{
		"path": "C:\\xampp\\htdocs\\Projects\\pathToJSON\/.vscode",
		"type": "dir",
		"components": [{
			"path": "C:\\xampp\\htdocs\\Projects\\pathToJSON\/.vscode\launch.json",
			"type": "file"
		}]
	}, {
		"path": "C:\\xampp\\htdocs\\Projects\\pathToJSON\index.php",
		"type": "file"
	}, {
		"path": "C:\\xampp\\htdocs\\Projects\\pathToJSON\test.code-workspace",
		"type": "file"
	}]
}
```

Delivered JSON would create

```
pathToJSON              //directory
  |_.vscode             //directory
  | |_launch.json       //file
  |_index.php           //file
  |_test.code-workspace //file
```

Validation of correct generated JSON format was done @https://jsonlint.com/
