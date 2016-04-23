json.array!(@subscribes) do |subscribe|
  json.extract! subscribe, :id, :name, :email
  json.url subscribe_url(subscribe, format: :json)
end
