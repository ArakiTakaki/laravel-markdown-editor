# 初回起動

`$ git clone https://github.com/ArakiTakaki/laravel-markdown-editor`

`$ cd laravel-markdown-editor`

`$ git clone https://github.com/laradock/laradock`

`$ sh laradock.sh`

## frontのセットアップ(明日整備する)

`$ echo "${PWD}/public"` -> 控えておく *1

`$ cd frontend`

`$ vim .env`

```.env
project_dir=*1
# *1を控えたものに置き換える。
```

`$ yarn`

`$ yarun build`
