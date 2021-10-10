release:
	git commit -m ":memo: $v changelog"
	git checkout main
	git merge --no-ff release/$v -m ":bookmark: $v"
	git tag -a $v -m "Release $v"
	git checkout develop
	git merge --no-ff release/$v -m ":bookmark: $v"
	git push origin develop
	git push upsteam main
	git push upsteam $v
	git branch -d release/$v