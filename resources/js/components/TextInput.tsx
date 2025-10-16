import React, { forwardRef, useEffect, useImperativeHandle, useRef } from 'react';

interface TextInputProps extends React.InputHTMLAttributes<HTMLInputElement> {
  isFocused?: boolean;
  className?: string;
}

export interface TextInputRef {
  focus: () => void;
}

const TextInput = forwardRef<TextInputRef, TextInputProps>(
  ({ type = 'text', className = '', isFocused = false, ...props }, ref) => {
    const localRef = useRef<HTMLInputElement>(null);

    // Expose focus() to parent via ref
    useImperativeHandle(ref, () => ({
      focus: () => localRef.current?.focus(),
    }));

    // Auto-focus if isFocused is true
    useEffect(() => {
      if (isFocused) {
        localRef.current?.focus();
      }
    }, [isFocused]);

    return (
      <input
        {...props}
        type={type}
        className={
          'rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ' +
          className
        }
        ref={localRef}
      />
    );
  }
);

export default TextInput;
