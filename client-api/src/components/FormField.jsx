import React from "react";

function FormField({
  labelName,
  type,
  name,
  placeholder,
  value,
  handleChange,
  isSurprisedMe,
  handleSurpriseMe,
}) {
  return (
    <div>
      <div className="flex items-center mb-2 gap-2 ">
        <label
          htmlFor={name}
          className="block text-sm font-medium text-gray-900"
        >
          {labelName}
        </label>
        {isSurprisedMe && (
          <button
            type="button"
            onClick={handleSurpriseMe}
            className=" font-semibold text-xs py-1 px-2 bg-gray-300 rounded-md text-black"
          >
            Click Here to Auto Generate Prompt
          </button>
        )}
      </div>
      <input
        type={type}
        name={name}
        id={name}
        placeholder={placeholder}
        value={value}
        onChange={handleChange}
        required
        className=" bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-400 focus:border-blue-600 outline-none block w-full p-3 border"
      />
    </div>
  );
}

export default FormField;
